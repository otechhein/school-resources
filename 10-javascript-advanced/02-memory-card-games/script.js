<<<<<<< HEAD
const cards = document.querySelectorAll(".card");

let matched = 0;
let cardOne, cardTwo;
let disableDeck = false;

function flipCard({ target: clickedCard }) {
	if (cardOne !== clickedCard && !disableDeck) {
		clickedCard.classList.add("flip");
		if (!cardOne) {
			return (cardOne = clickedCard);
		}
		cardTwo = clickedCard;
		disableDeck = true;
		let cardOneImg = cardOne.querySelector(".back-view img").src,
			cardTwoImg = cardTwo.querySelector(".back-view img").src;
		matchCards(cardOneImg, cardTwoImg);
	}
}

function matchCards(img1, img2) {
	if (img1 === img2) {
		matched++;
		if (matched == 8) {
			setTimeout(() => {
				return shuffleCard();
			}, 1000);
		}
		cardOne.removeEventListener("click", flipCard);
		cardTwo.removeEventListener("click", flipCard);
		cardOne = cardTwo = "";
		return (disableDeck = false);
	}
	setTimeout(() => {
		cardOne.classList.add("shake");
		cardTwo.classList.add("shake");
	}, 400);

	setTimeout(() => {
		cardOne.classList.remove("shake", "flip");
		cardTwo.classList.remove("shake", "flip");
		cardOne = cardTwo = "";
		disableDeck = false;
	}, 1200);
}

function getStringBetweenChars(inputString, startChar, endChar) {
	const regex = new RegExp(`\\${startChar}(.*?)\\${endChar}`);
	const match = inputString.match(regex);

	return match ? match[1] : null; // Returns matched content or null if not found
}

function shuffleCard() {
	matched = 0;
	disableDeck = false;
	cardOne = cardTwo = "";
	let arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
	arr.sort(() => (Math.random() > 0.5 ? 1 : -1));
	const srcValuesArray = Array.from(
		document.querySelectorAll(".back-view img"),
		(img) => img.src
	);

	cards.forEach((card, i) => {
		card.classList.remove("flip");
		let imgTag = card.querySelector(".back-view img");
		imgTag.src = srcValuesArray[arr[i]];
		card.addEventListener("click", flipCard);
	});
}

shuffleCard();

cards.forEach((card) => {
	card.addEventListener("click", flipCard);
});
=======
const cards = document.querySelectorAll(".card");

let matched = 0;
let cardOne, cardTwo;
let disableDeck = false;

function flipCard({ target: clickedCard }) {
	if (cardOne !== clickedCard && !disableDeck) {
		clickedCard.classList.add("flip");
		if (!cardOne) {
			return (cardOne = clickedCard);
		}
		cardTwo = clickedCard;
		disableDeck = true;
		let cardOneImg = cardOne.querySelector(".back-view img").src,
			cardTwoImg = cardTwo.querySelector(".back-view img").src;
		matchCards(cardOneImg, cardTwoImg);
	}
}

function matchCards(img1, img2) {
	if (img1 === img2) {
		matched++;
		if (matched == 8) {
			setTimeout(() => {
				return shuffleCard();
			}, 1000);
		}
		cardOne.removeEventListener("click", flipCard);
		cardTwo.removeEventListener("click", flipCard);
		cardOne = cardTwo = "";
		return (disableDeck = false);
	}
	setTimeout(() => {
		cardOne.classList.add("shake");
		cardTwo.classList.add("shake");
	}, 400);

	setTimeout(() => {
		cardOne.classList.remove("shake", "flip");
		cardTwo.classList.remove("shake", "flip");
		cardOne = cardTwo = "";
		disableDeck = false;
	}, 1200);
}

function getStringBetweenChars(inputString, startChar, endChar) {
	const regex = new RegExp(`\\${startChar}(.*?)\\${endChar}`);
	const match = inputString.match(regex);

	return match ? match[1] : null; // Returns matched content or null if not found
}

function shuffleCard() {
	matched = 0;
	disableDeck = false;
	cardOne = cardTwo = "";
	let arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
	arr.sort(() => (Math.random() > 0.5 ? 1 : -1));
	const srcValuesArray = Array.from(
		document.querySelectorAll(".back-view img"),
		(img) => img.src
	);

	cards.forEach((card, i) => {
		card.classList.remove("flip");
		let imgTag = card.querySelector(".back-view img");
		imgTag.src = srcValuesArray[arr[i]];
		card.addEventListener("click", flipCard);
	});
}

shuffleCard();

cards.forEach((card) => {
	card.addEventListener("click", flipCard);
});
>>>>>>> a39dfbd0e06462bf6dee0dce9083ba0ed3071c23
