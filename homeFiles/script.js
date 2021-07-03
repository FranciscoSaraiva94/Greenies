const groceryItems = [
  {
    id: 1,
    nome: "Kiwis",
    type: "frutas",
    img: "./imagens/kiwis.png",
    quantity: 0,
    preco: 3,
  },

  {
    id: 2,
    nome: "Maçã",
    type: "frutas",
    quantity: 0,
    img: "./imagens/apple.png",
    preco: 1.7,
  },

  {
    id: 3,
    nome: "Abacate",
    type: "frutas",
    quantity: 0,
    img: "./imagens/abacate.png",
    preco: 4,
  },

  {
    id: 4,
    nome: "Malagueta",
    type: "legumes",
    quantity: 0,
    img: "./imagens/malagueta.png",
    preco: 2,
  },

  {
    id: 5,
    nome: "Beringela",
    type: "legumes",
    quantity: 0,
    img: "./imagens/bringela.png",
    preco: 1.5,
  },

  {
    id: 6,
    nome: "Bróculos",
    type: "legumes",
    quantity: 0,
    img: "./imagens/broculos.png",
    preco: 1.7,
  },

  {
    id: 7,
    nome: "Bananas",
    type: "frutas",
    quantity: 0,
    img: "./imagens/banana.png",
    preco: 0.9,
  },
  {
    id: 8,
    nome: "Limões",
    type: "frutas",
    quantity: 0,
    img: "./imagens/limões.png",
    preco: 1.2,
  },
  {
    id: 9,
    nome: "Limas",
    type: "frutas",
    quantity: 0,
    img: "./imagens/limas.png",
    preco: 1.6,
  },
  {
    id: 10,
    nome: "abóbora",
    type: "legumes",
    quantity: 0,
    img: "./imagens/abóbora.png",
    preco: 0.7,
  },
  {
    id: 10,
    nome: "espargos",
    type: "legumes",
    quantity: 0,
    img: "./imagens/espargos.png",
    preco: 2.2,
  },
  {
    id: 10,
    nome: "tomates",
    type: "legumes",
    quantity: 0,
    img: "./imagens/tomates.png",
    preco: 1.2,
  },
];

const itemSection = document.querySelector(".itemSection");

const filterButtons = document.querySelectorAll(".filterBtn");

//Button functionality
filterButtons.forEach(function (button) {
  button.addEventListener("click", function (e) {
    const currentButton = e.currentTarget.dataset.btn;
    const filteredGroceries = groceryItems.filter(function (item) {
      if (item.type === currentButton) {
        return item;
      }
    });
    if (currentButton === "todos") {
      showGroceryitems(groceryItems);
    } else {
      showGroceryitems(filteredGroceries);
    }
  });
});

showGroceryitems(groceryItems);

// mostrar items
function showGroceryitems(groceryItems) {
  let groceryList = groceryItems.map(function (element) {
    return `<article class="menu-item" data-id="${element.id}">
  <img src=${element.img} alt=${element.nome} class="photo" />
  <div class="itemInfo">
      <h4 class="nomeDoProduto">${element.nome}</h4>
      <h4 class="precoDoProduto">${element.preco}€/kg</h4>
       <div class="cartButtons">
           <div class="minusAndAdd">
                <button class="cartButtonMinus" alt="" srcset="">-</button>
                <h5 class="itemQuantity">${element.quantity}</h5>
                <button class="cartButtonPlus" alt="" srcset="">+</button>
           </div>  
      <button class="cartButtonAdd">ADICIONAR <img src="http://localhost/greenies/imagens/cartblue.svg" alt="cart" id="secondCart"></button>
    </div>
  </div>
</article>`;
  });

  groceryList = groceryList.join(""); // remover virgulas
  itemSection.innerHTML = groceryList;

  renderItem();
}

function renderItem() {
  const everyItemSection = itemSection.querySelectorAll(".menu-item"); // selecionar todas secções
  everyItemSection.forEach(makeItemSection); // callback para todos os items
  // add or sub item
}

function makeItemSection(itemSection, index) {
  const cartButtonMinus = itemSection.querySelector(".cartButtonMinus");
  const cartButtonPlus = itemSection.querySelector(".cartButtonPlus");
  const currentItem = groceryItems[index]; // index property do forEach
  const cartButtonAdd = itemSection.querySelector(".cartButtonAdd");
  let quantity = currentItem.quantity; // quantidade

  cartButtonAdd.addEventListener("click", function () {
    currentItem.quantity = quantity; // modificamos quando adicionamos ao carrinho
    renderCart();
  });

  cartButtonPlus.addEventListener("click", () => {
    quantity++;
    updateQuantity(itemSection, quantity);
  });

  cartButtonMinus.addEventListener("click", () => {
    quantity--;
    if (quantity < 0) {
      quantity = 0;
    }
    updateQuantity(itemSection, quantity);
  });
}

function updateQuantity(itemSection, quantity) {
  const itemQuantity = itemSection.querySelector(".itemQuantity");
  itemQuantity.textContent = quantity;
}
function updateAllQuantities() {
  const everyMenuItem = document.querySelectorAll(".itemSection > .menu-item");
  everyMenuItem.forEach((element) => {
    const currentElement = groceryItems.find((groceryItem) => {
      return element.dataset.id == groceryItem.id;
    });
    if (currentElement) {
      updateQuantity(element, currentElement.quantity);
    }
  });
}
function renderCart() {
  const itemsInCart = groceryItems.filter(function (element) {
    return element.quantity > 0;
  });
  let displayCartItems = itemsInCart.map(function (element) {
    let custo = element.quantity * element.preco;
    return `
  <div class="cartSection">
  <span class="item">
    <span class="cartItem">
        <img src="" alt="" />
        <span class="item-info">
            <span>${element.nome}</span>
            <span>${element.quantity}Kg</span>
            <span>${custo}€</span>   
        </span>
    </span>
    <span class="xButton">
        <button class="btn btn-xs btn-danger pull-right" data-id="${element.id}">x</button>
    </span>
</span>
</div>`;
  });

  const cartWrapper = document.querySelector(".cartWrapper");
  cartWrapper.innerHTML = displayCartItems.join("");
  const xButton = cartWrapper.querySelectorAll(".xButton button");

  xButton.forEach(function (element) {
    const item = cartWrapper.querySelector(".item"); // verifica o ID individual de cada button, para um XButton não eliminar uma cart entry que não lhe corresponda
    element.addEventListener("click", function (e) {
      const filteredItem = groceryItems.find(function (element) {
        return element.id == e.target.dataset.id;
      });
      if (filteredItem) {
        // quando encontra o filteredItem
        filteredItem.quantity = 0; // zera a quantidade
        renderCart();
        updateAllQuantities();
        e.stopPropagation();
      }
    });
  });
}

(function ($) {
  $(".main-carousel").flickity({
    // options
    cellAlign: "left",
    wrapAround: true,
    // prevNextButtons: false
  });
})(jQuery);
