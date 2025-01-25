import { 
  people01, 
  people02, 
  people03, 
  facebook, 
  instagram, 
  linkedin, 
  twitter, 
  airbnb, 
  binance, 
  coinbase, 
  dropbox, 
  send, 
  shield, 
  star
} from "../assets";

export const navLinks = [
  {
    id: "home",
    title: "Avaleht",
  },
  {
    id: "features",
    title: "Boonused",
  },
  {
    id: "product",
    title: "Produkt",
  },
  {
    id: "clients",
    title: "Kliendid",
  },
];

export const features = [
  {
    id: "feature-1",
    icon: star,
    title: "Auhinnad",
    content:
      "Parimad krediitkaardid pakuvad ahvatlevaid kombinatsioone kampaaniatest ja auhindadest.",
  },
  {
    id: "feature-2",
    icon: shield,
    title: "100% Turvaline",
    content:
      "Me võtame proaktiivseid samme, et tagada teie teabe ja tehingute turvalisus.",
  },
  {
    id: "feature-3",
    icon: send,
    title: "Krediidi ülekandmine",
    content:
      "Tasakaalu ülekandmise krediitkaart võib säästa teile palju raha intressitasudelt.",
  },
];

export const feedback = [
  {
    id: "feedback-1",
    content:
      "Raha on vaid tööriist. See viib sind igale poole, kuhu soovid, kuid see ei asenda sind kui juhtijat.",
    name: "Jaana Kask",
    title: "Asutaja ja juht",
    img: people01,
  },
  {
    id: "feedback-2",
    content:
      "Raha teeb su elu lihtsamaks. Kui sul on seda, oled sa õnnelik.",
    name: "Karl Laht",
    title: "Tehnoloogiajuht (CTO)",
    img: people02,
  },
  {
    id: "feedback-3",
    content:
      "Tavaliselt on need inimesed, kes tegelevad rahanduse, rahanduse ja rahvusvahelise kaubandusega, need, kes on tõesti rikkad.",
    name: "Andrus Tamm",
    title: "Logistika juht",
    img: people03,
  },
];

export const stats = [
  {
    id: "stats-1",
    title: "Aktiivseid kasutajaid",
    value: "3800+",
  },
  {
    id: "stats-2",
    title: "Usaldatud firmade poolt",
    value: "230+",
  },
  {
    id: "stats-3",
    title: "Ülekandeid",
    value: "€230M+",
  },
];

export const footerLinks = [
  {
    title: "Kasulikud lingid",
    links: [
      {
        name: "Sisu",
        link: "https://www.hoobank.com/content/",
      },
      {
        name: "Kuidas see töötab",
        link: "https://www.hoobank.com/how-it-works/",
      },
      {
        name: "Loo",
        link: "https://www.hoobank.com/create/",
      },
      {
        name: "Uuri",
        link: "https://www.hoobank.com/explore/",
      },
      {
        name: "Tingimused ja teenused",
        link: "https://www.hoobank.com/terms-and-services/",
      },
    ],
  },
  {
    title: "Kogukond",
    links: [
      {
        name: "Abikeskus",
        link: "https://www.hoobank.com/help-center/",
      },
      {
        name: "Partnerid",
        link: "https://www.hoobank.com/partners/",
      },
      {
        name: "Soovitused",
        link: "https://www.hoobank.com/suggestions/",
      },
      {
        name: "Blogi",
        link: "https://www.hoobank.com/blog/",
      },
      {
        name: "Uudiskirjad",
        link: "https://www.hoobank.com/newsletters/",
      },
    ],
  },
  {
    title: "Partner",
    links: [
      {
        name: "Meie partner",
        link: "https://www.hoobank.com/our-partner/",
      },
      {
        name: "Saada partneriks",
        link: "https://www.hoobank.com/become-a-partner/",
      },
    ],
  },
];


export const socialMedia = [
  {
    id: "social-media-1",
    icon: instagram,
    link: "https://www.instagram.com/",
  },
  {
    id: "social-media-2",
    icon: facebook,
    link: "https://www.facebook.com/",
  },
  {
    id: "social-media-3",
    icon: twitter,
    link: "https://www.twitter.com/",
  },
  {
    id: "social-media-4",
    icon: linkedin,
    link: "https://www.linkedin.com/",
  },
];

export const clients = [
  {
    id: "client-1",
    logo: airbnb,
  },
  {
    id: "client-2",
    logo: binance,
  },
  {
    id: "client-3",
    logo: coinbase,
  },
  {
    id: "client-4",
    logo: dropbox,
  },
];