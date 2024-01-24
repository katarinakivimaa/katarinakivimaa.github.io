


const organs = [
    {
      iconName: "adobe",
      brandName: "Heart",
      color: "#ff0000"
    },
    {
      iconName: "airbnb",
      brandName: "Lungs",
      color: "#fd5c63"
    },
    {
      iconName: "amazon",
      brandName: "Bone",
      color: "#333333"
    },
    {
      iconName: "android",
      brandName: "Ankle",
      color: "#a4c639"
    },
    {
      iconName: "angellist",
      brandName: "Femur",
      color: "#000000"
    }

  ];
  let correct = 0;
  let total = 0;
  const totalDraggableItems = 5;
  const totalMatchingPairs = 5; // Should be <= totalDraggableItems
  
  const scoreSection = document.querySelector(".score");
  const correctSpan = scoreSection.querySelector(".correct");
  const totalSpan = scoreSection.querySelector(".total");
  const playAgainBtn = scoreSection.querySelector("#play-again-btn");
  
  const draggableItems = document.querySelector(".draggable-items");
  const matchingPairs = document.querySelector(".matching-pairs");
  let draggableElements;
  let droppableElements;


  initiateGame();
  
  function initiateGame() {
    const randomDraggableOrgans = generateRandomItemsArray(totalDraggableItems, organs);
    const randomDroppableOrgans = totalMatchingPairs<totalDraggableItems ? generateRandomItemsArray(totalMatchingPairs, randomDraggableOrgans) : randomDraggableOrgans;
    const alphabeticallySortedRandomDroppableOrgans = [...randomDroppableOrgans].sort((a,b) => a.brandName.toLowerCase().localeCompare(b.brandName.toLowerCase()));
    
    // Create "draggable-items" and append to DOM
    for(let i=0; i<randomDraggableOrgans.length; i++) {
      draggableItems.insertAdjacentHTML("beforeend", `
        <i class="fab draggable" draggable="true" style="color: ${randomDraggableOrgans[i].color};" id="${randomDraggableOrgans[i].iconName}"></i>
      `);
    }
    
    // Create "matching-pairs" and append to DOM
    for(let i=0; i<alphabeticallySortedRandomDroppableOrgans.length; i++) {
      matchingPairs.insertAdjacentHTML("beforeend", `
        <div class="matching-pair">
          <span class="label">${alphabeticallySortedRandomDroppableOrgans[i].brandName}</span>
          <span class="droppable" data-brand="${alphabeticallySortedRandomDroppableOrgans[i].iconName}"></span>
        </div>
      `);
    }
    
    draggableElements = document.querySelectorAll(".draggable");
    droppableElements = document.querySelectorAll(".droppable");
    
    draggableElements.forEach(elem => {
      elem.addEventListener("dragstart", dragStart);
      // elem.addEventListener("drag", drag);
      // elem.addEventListener("dragend", dragEnd);
    });
    
    droppableElements.forEach(elem => {
      elem.addEventListener("dragenter", dragEnter);
      elem.addEventListener("dragover", dragOver);
      elem.addEventListener("dragleave", dragLeave);
      elem.addEventListener("drop", drop);
    });
  }
  
  // Drag and Drop Functions
  
  //Events fired on the drag target
  
  function dragStart(event) {
    event.dataTransfer.setData("text", event.target.id); // or "text/plain"
  }
  
  //Events fired on the drop target
  
  function dragEnter(event) {
    if(event.target.classList && event.target.classList.contains("droppable") && !event.target.classList.contains("dropped")) {
      event.target.classList.add("droppable-hover");
    }
  }
  
  function dragOver(event) {
    if(event.target.classList && event.target.classList.contains("droppable") && !event.target.classList.contains("dropped")) {
      event.preventDefault();
    }
  }
  
  function dragLeave(event) {
    if(event.target.classList && event.target.classList.contains("droppable") && !event.target.classList.contains("dropped")) {
      event.target.classList.remove("droppable-hover");
    }
  }
  
  function drop(event) {
    event.preventDefault();
    event.target.classList.remove("droppable-hover");
    const draggableElementBrand = event.dataTransfer.getData("text");
    const droppableElementBrand = event.target.getAttribute("data-brand");
    const isCorrectMatching = draggableElementBrand===droppableElementBrand;
    total++;
    if(isCorrectMatching) {
      const draggableElement = document.getElementById(draggableElementBrand);
      event.target.classList.add("dropped");
      draggableElement.classList.add("dragged");
      draggableElement.setAttribute("draggable", "false");
      event.target.innerHTML = `<i class="fab fa-${draggableElementBrand}" style="color: ${draggableElement.style.color};"></i>`;
      correct++;  
    }
    scoreSection.style.opacity = 0;
    setTimeout(() => {
      correctSpan.textContent = correct;
      totalSpan.textContent = total;
      scoreSection.style.opacity = 1;
    }, 200);
    if(correct===Math.min(totalMatchingPairs, totalDraggableItems)) { // Game Over!!
      playAgainBtn.style.display = "block";
      setTimeout(() => {
        playAgainBtn.classList.add("play-again-btn-entrance");
      }, 200);
    }
  }
  
  // Other Event Listeners
  playAgainBtn.addEventListener("click", playAgainBtnClick);
  function playAgainBtnClick() {
    playAgainBtn.classList.remove("play-again-btn-entrance");
    correct = 0;
    total = 0;
    draggableItems.style.opacity = 0;
    matchingPairs.style.opacity = 0;
    setTimeout(() => {
      scoreSection.style.opacity = 0;
    }, 100);
    setTimeout(() => {
      playAgainBtn.style.display = "none";
      while (draggableItems.firstChild) draggableItems.removeChild(draggableItems.firstChild);
      while (matchingPairs.firstChild) matchingPairs.removeChild(matchingPairs.firstChild);
      initiateGame();
      correctSpan.textContent = correct;
      totalSpan.textContent = total;
      draggableItems.style.opacity = 1;
      matchingPairs.style.opacity = 1;
      scoreSection.style.opacity = 1;
    }, 500);
  }
  
  // Auxiliary functions
  function generateRandomItemsArray(n, originalArray) {
    let res = [];
    let clonedArray = [...originalArray];
    if(n>clonedArray.length) n=clonedArray.length;
    for(let i=1; i<=n; i++) {
      const randomIndex = Math.floor(Math.random()*clonedArray.length);
      res.push(clonedArray[randomIndex]);
      clonedArray.splice(randomIndex, 1);
    }
    return res;
  }