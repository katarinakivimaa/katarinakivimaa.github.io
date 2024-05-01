// The list of brands with custom images
const brands = [
  {
    iconName: "magu.png",
    brandName: "Magu",
    color: "#ff0000"
  },
  {
    iconName: "põrn.png",
    brandName: "Põrn",
    color: "#fd5c63"
  },
  {
    iconName: "sapipõis.png",
    brandName: "Sapipõis",
    color: "#333333"
  },
  {
    iconName: "hingetoru.png",
    brandName: "Hingetoru",
    color: "#333333"
  },
  {
    iconName: "jämesool.png",
    brandName: "Jämesool",
    color: "#333333"
  },
  {
    iconName: "kilpnääre.png",
    brandName: "Kilpnääre",
    color: "#333333"
  },
  {
    iconName: "kopsud.png",
    brandName: "Kopsud",
    color: "#333333"
  },
  {
    iconName: "kusejoad.png",
    brandName: "Kusejoad",
    color: "#333333"
  },
  {
    iconName: "kusepõisjakusiti.png",
    brandName: "Kusepõis ja kusiti",
    color: "#333333"
  },
  {
    iconName: "maks.png",
    brandName: "Maks",
    color: "#333333"
  },
  {
    iconName: "neerud.png",
    brandName: "Neerud",
    color: "#333333"
  },
  {
    iconName: "pankreas.png",
    brandName: "Pankreas",
    color: "#333333"
  },
  {
    iconName: "peensool.png",
    brandName: "Peensool",
    color: "#333333"
  },
  {
    iconName: "pimesool.png",
    brandName: "Pimesool",
    color: "#333333"
  },
  {
    iconName: "söögitoru.png",
    brandName: "Söögitoru",
    color: "#333333"
  },
  {
    iconName: "süda.png",
    brandName: "Süda",
    color: "#333333"
  },
  {
    iconName: "Veen.png",
    brandName: "Veen",
    color: "#333333"
  }
  // Add more brands as needed...
];

// Constants and initial variables
let correct = 0;
let total = 0;
const totalDraggableItems = 5; // Number of draggable items
const totalMatchingPairs = 5; // Should be <= totalDraggableItems

// Query DOM elements
const scoreSection = document.querySelector(".score");
const correctSpan = scoreSection.querySelector(".correct");
const totalSpan = scoreSection.querySelector(".total");
const playAgainBtn = scoreSection.querySelector("#play-again-btn");
const draggableItems = document.querySelector(".draggable-items");
const matchingPairs = document.querySelector(".matching-pairs");

let draggableElements;
let droppableElements;

// Function to initiate the game
function initiateGame() {
  const randomDraggableBrands = generateRandomItemsArray(totalDraggableItems, brands);
  const randomDroppableBrands = totalMatchingPairs < totalDraggableItems
    ? generateRandomItemsArray(totalMatchingPairs, randomDraggableBrands)
    : randomDraggableBrands;

  const sortedDroppableBrands = [...randomDroppableBrands].sort((a, b) =>
    a.brandName.toLowerCase().localeCompare(b.brandName.toLowerCase())
  );

  // Create draggable items
  draggableItems.innerHTML = ""; // Clear existing content
  randomDraggableBrands.forEach(brand => {
    const imagePath = `assets/${brand.iconName}`;
    draggableItems.insertAdjacentHTML(
      "beforeend",
      `<img src="${imagePath}" class="draggable" draggable="true" style="border-color: ${brand.color};" id="${brand.iconName.split('.')[0]}">`
    );
  });

  // Create matching pairs
  matchingPairs.innerHTML = ""; // Clear existing content
  sortedDroppableBrands.forEach(brand => {
    matchingPairs.insertAdjacentHTML(
      "beforeend",
      `<div class="matching-pair">
        <span class="label">${brand.brandName}</span>
        <span class="droppable" data-brand="${brand.iconName.split('.')[0]}"></span>
      </div>`
    );
  });

  // Add event listeners for drag-and-drop functionality
  draggableElements = document.querySelectorAll(".draggable");
  droppableElements = document.querySelectorAll(".droppable");

  draggableElements.forEach(elem => {
    elem.addEventListener("dragstart", dragStart);
  });

  droppableElements.forEach(elem => {
    elem.addEventListener("dragenter", dragEnter);
    elem.addEventListener("dragover", dragOver);
    elem.addEventListener("dragleave", dragLeave);
    elem.addEventListener("drop", drop);
  });
}

// Drag-and-drop event handlers
function dragStart(event) {
  event.dataTransfer.setData("text", event.target.id);
}

function dragEnter(event) {
  if (event.target.classList.contains("droppable") && !event.target.classList.contains("dropped")) {
    event.target.classList.add("droppable-hover");
  }
}

function dragOver(event) {
  if (event.target.classList.contains("droppable") && !event.target.classList.contains("dropped")) {
    event.preventDefault(); // Allows dropping
  }
}

function dragLeave(event) {
  if (event.target.classList.contains("droppable") && !event.target.classList.contains("dropped")) {
    event.target.classList.remove("droppable-hover");
  }
}

function drop(event) {
  event.preventDefault();
  const draggableElementBrand = event.dataTransfer.getData("text");
  const droppableElementBrand = event.target.getAttribute("data-brand");
  const isCorrectMatching = draggableElementBrand === droppableElementBrand;

  if (isCorrectMatching) {
    const draggableElement = document.getElementById(draggableElementBrand);
    const imagePath = `assets/${draggableElementBrand}.png`;
    event.target.classList.remove("droppable-hover");
    event.target.classList.add("dropped");
    draggableElement.classList.add("dragged");
    draggableElement.setAttribute("draggable", "false");
    event.target.innerHTML = `<img src="${imagePath}" alt="${draggableElementBrand}">`;
    
    correct++; // Increment correct score
  }

  total++; // Increment total attempts
  updateScore(); // Update score in the UI

  if (correct === totalMatchingPairs) { // If all pairs are correctly matched
    playAgainBtn.style.display = "block";
    playAgainBtn.classList.add("play-again-btn-entrance");
  }
}

// Helper functions
function generateRandomItemsArray(n, originalArray) {
  const res = [];
  const clonedArray = [...originalArray];
  const count = Math.min(n, clonedArray.length);

  for (let i = 0; i < count; i++) {
    const randomIndex = Math.floor(Math.random() * clonedArray.length);
    res.push(clonedArray[randomIndex]);
    clonedArray.splice(randomIndex, 1); // Remove selected item from clone
  }

  return res;
}

function updateScore() {
  correctSpan.textContent = correct;
  totalSpan.textContent = total;
  scoreSection.style.opacity = 1;
}

// Reset and restart game
playAgainBtn.addEventListener("click", () => {
  playAgainBtn.classList.remove("play-again-btn-entrance");
  correct = 0;
  total = 0;
  initiateGame(); // Re-initialize the game with new random items
  playAgainBtn.style.display = "none";
});

// Start the game for the first time
initiateGame();
