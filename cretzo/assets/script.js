// trending deals
let = $("#banner").owlCarousel({
  loop: true,
  margin: 15,
  nav: false,
  dots: true,
  pagination: false,
  animateOut: "slideOutDown",
  animateIn: "flipInX",
  responsive: {
    0: {
      items: 2,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 4,
    },
    1200: {
      items: 6,
    },
  },
});
// bestSeller
let = $("#bestSeller").owlCarousel({
  loop: true,
  margin: 15,
  nav: false,
  dots: true,
  pagination: false,
  animateOut: "slideOutDown",
  animateIn: "flipInX",
  responsive: {
    0: {
      items: 2,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 3,
    },
    1200: {
      items: 4,
    },
  },
});
// instagram
let = $("#instagram").owlCarousel({
  loop: true,
  margin:0,
  nav: true,
  dots:false,
  pagination: false,
  animateOut: "slideOutDown",
  animateIn: "flipInX",
  responsive: {
    0: {
      items: 3,
    },
    600: {
      items: 4,
    },
    1000: {
      items: 5,
    },
    1200: {
      items: 6,
    },
  },
});
// MoreProductSeller
let = $("#MoreProductSeller").owlCarousel({
  loop: true,
  margin: 15,
  nav: false,
  dots: true,
  pagination: false,
  animateOut: "slideOutDown",
  animateIn: "flipInX",
  responsive: {
    0: {
      items: 2,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 3,
    },
    1200: {
      items: 6,
    },
  },
});
// Similar Product
let = $("#SimilarProduct").owlCarousel({
  loop: true,
  margin: 15,
  nav: false,
  dots: true,
  pagination: false,
  animateOut: "slideOutDown",
  animateIn: "flipInX",
  responsive: {
    0: {
      items: 2,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 3,
    },
    1200: {
      items: 6,
    },
  },
});
// testimonial
let = $("#testimonial").owlCarousel({
  loop: true,
  margin: 15,
  nav: false,
  dots: true,
  pagination: false,
  animateOut: "slideOutDown",
  animateIn: "flipInX",
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1,
    },
    1000: {
      items: 1,
    },
    1200: {
      items: 1,
    },
  },
});
// Best Seller 
let = $("#sellerBestCollection").owlCarousel({
  loop: true,
  margin: 15,
  nav: false,
  dots: true,
  pagination: false,
  animateOut: "slideOutDown",
  animateIn: "flipInX",
  responsive: {
    0: {
      items: 2,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 4,
    },
    1200: {
      items: 6,
    },
  },
});
// sellerBest
let = $("#sellerBest").owlCarousel({
  loop: true,
  margin: 15,
  nav: false,
  dots: true,
  pagination: false,
  animateOut: "slideOutDown",
  animateIn: "flipInX",
  responsive: {
    0: {
      items: 2,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 4,
    },
    1200: {
      items: 6,
    },
  },
});
// sellerNewArrival
let = $("#sellerNewArrival").owlCarousel({
  loop: true,
  margin: 15,
  nav: false,
  dots: true,
  pagination: false,
  animateOut: "slideOutDown",
  animateIn: "flipInX",
  responsive: {
    0: {
      items: 2,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 4,
    },
    1200: {
      items: 6,
    },
  },
});
let = $("#ImagesGalleryOfVendor").owlCarousel({
  loop: true,
  margin: 15,
  nav: false,
  dots: true,
  pagination: false,
  animateOut: "slideOutDown",
  animateIn: "flipInX",
  responsive: {
    0: {
      items: 2,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 4,
    },
    1200: {
      items: 6,
    },
  },
});
// dot check
function toggleIcon(spanElement) {
  var iElement = spanElement.querySelector("i");
  if (iElement) {
    spanElement.removeChild(iElement);
  } else {
    var newIElement = document.createElement("i");
    newIElement.className = "bi bi-check";
    spanElement.appendChild(newIElement);
  }
}

// NAVBAR ACTIVE
// let active = document.querySelectorAll('.nav-link');
// const activePage = window.location.pathname;
// for (key of active) {
//   if (key.href.includes(`${activePage}`)) {
//     key.classList.add('active');
//   }
//   if (window.location.pathname === "/") {
//     key.classList.remove('');
//  }
// }
// range bar dynamic
function updatePrice(value) {
  var priceValue = document.getElementById("priceValue");
  priceValue.textContent = value;
}

// image clickable
window.addEventListener("DOMContentLoaded", function() {
  // Set the first image as active by default
  var defaultImage = document.querySelector(".activeImg");
  handleImageClick(defaultImage);
});

function handleImageClick(element) {
  // Remove the "active" class from all images
  var allImages = document.querySelectorAll("img");
  allImages.forEach(function(img) {
      img.classList.remove("activeImg");
  });

  // Add the "active" class to the clicked image
  element.classList.add("activeImg");

  var selectedImageDiv = document.getElementById("selectedImage");
  selectedImageDiv.innerHTML = '<img src="' + element.src + '"width="100%" height="100%" class="rounded" alt="">';
}
// quantity increase
    var quantityElement = document.getElementById("quantity");
    var currentQty = parseInt(quantityElement.innerText);

    function decreaseQty() {
        if (currentQty > 1) {
            currentQty--;
            updateQuantity();
        }
    }

    function increaseQty() {
        currentQty++;
        updateQuantity();
    }

    function updateQuantity() {
        quantityElement.innerText = currentQty;
    }
