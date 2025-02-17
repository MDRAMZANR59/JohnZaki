$(".rafi2.owl-carousel").owlCarousel({
  loop: true,
  margin: 5,
  nav: true,
  dots: true,
  autoplay: false,
  autoplayTimeout: 2000,
  responsive: {
    572: {
      items: 3,
      margin: 3,
    },
    600: {
      items: 3,
      margin: 4,
    },

    1000: {
      items: 3,
    },
  },
});
// owl first

// owl 2nd
$(".rafi-1.owl-carousel").owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  autoplay: true,
  autoplayTimeout: 3000,
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
  },
});

// all ct oparation

function alCtgMenus() {
  let allCtgMain = document.querySelector(".allcatagories");
  let onClickMenu = document.querySelector(".all--categories--menu");

  if(allCtgMain && onClickMenu){
    
    onClickMenu?.addEventListener("click", function () {
      if (allCtgMain.style.display === "block") {
        allCtgMain.style.display = "none";
        allCtyActive.style.display = "none";
      } else {
        allCtgMain.style.display = "block";
        allCtyActive.style.display = "block";
      }
      console.log("click hoise");
    });
  }

}

alCtgMenus();

// menu oparation


// phone navbar
function phoneNavbars() {
  let navMain = document.querySelector(".nevigation--home--inner--menu");
  let opnNav = document.querySelector(".openNav");

  if (navMain && opnNav) {
    opnNav.addEventListener("click", function () {
      if (navMain.style.display === "block") {
        navMain.style.display = "none";
      } else {
        navMain.style.display = "block";
      }
    });
  }
}

phoneNavbars();
// phone navabr




// store page increse decrese function
function inCreseDecrese() {
  let pluss = document.querySelector(".handle--plus");
  let minuss = document.querySelector(".handle--minus");
  let equalll = document.querySelector(".handle--output");

  let count = 0;

  if (pluss && minuss && equalll) {
    pluss.addEventListener("click", function () {
      count++;
      equalll.innerHTML = count;
    });

    minuss.addEventListener("click", function () {
      if (count <= 0) {
        console.log("select item");
      } else {
        count--;
        equalll.innerHTML = count;
      }
    });
  }
}

inCreseDecrese();
// store page increse decrese function


function handleFabric(){
  
  let add = document.querySelector(".handle--plus--def")
  let removes = document.querySelector(".handle--minus--def")
  let outPuts = document.querySelector(".handle--output--def")
  
  let fab = 0.5;
  
  add?.addEventListener('click', function(){
    fab += 0.5;
    outPuts.innerHTML = fab + "  Meters"
  })
  
  removes?.addEventListener('click', function(){
    if(!fab <= 0){
      fab -= 0.5;
      outPuts.innerHTML = fab + "  Meters"
    }
  })

}

handleFabric()
// handle fabric end


function handleProductImg() {
  let colourPlates = document.querySelectorAll(".pro-img-trigger");
  let mainImg = document.querySelector(".product--d--item--big img");

  if (colourPlates && mainImg) {
    colourPlates.forEach((item) => {
      item.addEventListener("click", function () {
        let currentImgUrl = item.getAttribute("data-img");

        mainImg.setAttribute("src", currentImgUrl);

        colourPlates.forEach((item) => {
          item.classList.remove("show");
        });

        item.classList.add("show");
      });
    });
  }
}

handleProductImg();
// product image


// filture oparation
function showFilter() {
  let filterShow = document.querySelector(".store--filture--ic");
  let filture = document.querySelector(".store--feature--filter");

  if (filterShow && filture) {
    filterShow.addEventListener("click", function () {
      if (filture.style.display === "block") {
        filture.style.display = "none";
      } else {
        filture.style.display = "block";
      }
    });
  }
}

showFilter();


// function showFilter() {
//   let filterShow = document.querySelector(".store--filture--ic");
//   let filture = document.querySelector(".store--feature--filter");

//   if (filterShow && filture) {
//     // Toggle filter visibility on .store--filture--ic click
//     filterShow.addEventListener("click", function (event) {
//       event.stopPropagation(); // Prevents the click from propagating to the document
//       filture.style.display = (filture.style.display === "block") ? "none" : "block";
//     });

//     // Close filter when clicking outside .store--feature--filter
//     document.addEventListener("click", function (event) {
//       if (!filture.contains(event.target) && event.target !== filterShow) {
//         filture.style.display = "none";
//       }
//     });
//   }
// }

showFilter();


// ----------------- Solaiman js starts ------------------//


// ------------preview image js starts ----------------//



// dashbordbord solaiman bhai start



// --------------------------------------append stock js---------------------------------//

const addBtn = document.getElementById('add-more-product-btn');
const uploadMain = document.getElementById('image-upload-main');

let stock = 1;

addBtn?.addEventListener('click', () => {
  stock++;
  let li = document.createElement('li');
  let uniqueId = `product-${stock}`;
  li.innerHTML = `
  <div class="sm-upload-image-container">
    <div class="title">
      <h2>Stock ${stock}</h2>
    </div>
    <div class="add-product-dropdown-container">
      <!-- input 1 -->
      <div class="input1">
        <label for="color-selector-${uniqueId}">Color</label>
        <select id="color-selector-${uniqueId}">
          <option data-display="Select">Red</option>
          <option value="1">Green</option>
          <option value="2">Yellow</option>
          <option value="3">Blue</option>
          <option value="4">Crimpson</option>
        </select>
      </div>
      <!-- input 2 -->
      <div class="input2">
        <label for="size-selector-${uniqueId}">Size</label>
        <select id="size-selector-${uniqueId}">
          <option data-display="Select">SM</option>
          <option value="1">L</option>
          <option value="2">XL</option>
          <option value="3">XXL</option>
          <option value="4">XXXL</option>
        </select>
      </div>
      <!-- input 3 -->
      <div class="input3">
        <label for="quantity-selector-${uniqueId}">Quantity</label>
        <select class="quantity-selector">
          <option data-display="Select">1</option>
          <option value="1">2</option>
          <option value="2">3</option>
          <option value="3">4</option>
          <option value="4">5</option>
        </select>
      </div>
    </div>
    <div class="upload-image-title">
      <span>Add Product Images</span>
    </div>
    <div class="sm-upload-input-container">
      <div class="label-container">
        <label for="thumbnail-${uniqueId}" class="thumbnail-${uniqueId}">
          <svg
            id="svgIcon-thumbnail-${uniqueId}"
            xmlns="http://www.w3.org/2000/svg"
            width="63"
            height="64"
            viewBox="0 0 63 64"
            fill="none"
          >
            <path
              d="M17.8006 58.3914H44.7838C51.89 58.3914 54.7222 53.9313 55.0569 48.4948L56.3958 26.6958C56.7563 20.9953 52.3277 16.1658 46.7406 16.1658C45.17 16.1658 43.7281 15.2421 43.0072 13.817L41.1534 9.99028C39.969 7.5887 36.8793 5.60938 34.2531 5.60938H28.357C25.705 5.60938 22.6153 7.5887 21.4309 9.99028L19.5771 13.817C18.8562 15.2421 17.4144 16.1658 15.8438 16.1658C10.2566 16.1658 5.82805 20.9953 6.18852 26.6958L7.52738 48.4948C7.83634 53.9313 10.6943 58.3914 17.8006 58.3914Z"
              stroke="#5A5C5F"
              stroke-width="4.23952"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M27.4277 21.4438H35.1519"
              stroke="#5A5C5F"
              stroke-width="4.23952"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M31.2898 47.8348C35.8985 47.8348 39.6576 43.9817 39.6576 39.2577C39.6576 34.5338 35.8985 30.6807 31.2898 30.6807C26.681 30.6807 22.9219 34.5338 22.9219 39.2577C22.9219 43.9817 26.681 47.8348 31.2898 47.8348Z"
              stroke="#5A5C5F"
              stroke-width="4.23952"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
          <div id="preview-thumbnail-${uniqueId}" class="preview--box"></div>
        </label>
        <input
          accept="image/*"
          type="file"
          name=""
          id="thumbnail-${uniqueId}"
        />
        <span>Thumbnail</span>
      </div>
      <div class="label-container">
        <label for="front-side-${uniqueId}" class="front-side-${uniqueId}">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="63"
            height="64"
            viewBox="0 0 63 64"
            fill="none"
            id="svgIcon-front-side-${uniqueId}"
          >
            <path
              d="M17.8006 58.3914H44.7838C51.89 58.3914 54.7222 53.9313 55.0569 48.4948L56.3958 26.6958C56.7563 20.9953 52.3277 16.1658 46.7406 16.1658C45.17 16.1658 43.7281 15.2421 43.0072 13.817L41.1534 9.99028C39.969 7.5887 36.8793 5.60938 34.2531 5.60938H28.357C25.705 5.60938 22.6153 7.5887 21.4309 9.99028L19.5771 13.817C18.8562 15.2421 17.4144 16.1658 15.8438 16.1658C10.2566 16.1658 5.82805 20.9953 6.18852 26.6958L7.52738 48.4948C7.83634 53.9313 10.6943 58.3914 17.8006 58.3914Z"
              stroke="#5A5C5F"
              stroke-width="4.23952"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M27.4277 21.4438H35.1519"
              stroke="#5A5C5F"
              stroke-width="4.23952"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M31.2898 47.8348C35.8985 47.8348 39.6576 43.9817 39.6576 39.2577C39.6576 34.5338 35.8985 30.6807 31.2898 30.6807C26.681 30.6807 22.9219 34.5338 22.9219 39.2577C22.9219 43.9817 26.681 47.8348 31.2898 47.8348Z"
              stroke="#5A5C5F"
              stroke-width="4.23952"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
          <div id="preview-front-side-${uniqueId}" class="preview--box"></div>
        </label>
        <input
          accept="image/*"
          type="file"
          name=""
          id="front-side-${uniqueId}"
        />
        <span>Front Side</span>
      </div>
      <div class="label-container">
        <label for="back-side-${uniqueId}" class="back-side-${uniqueId}">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="63"
            height="64"
            viewBox="0 0 63 64"
            fill="none"
            id="svgIcon-back-side-${uniqueId}"
          >
            <path
              d="M17.8006 58.3914H44.7838C51.89 58.3914 54.7222 53.9313 55.0569 48.4948L56.3958 26.6958C56.7563 20.9953 52.3277 16.1658 46.7406 16.1658C45.17 16.1658 43.7281 15.2421 43.0072 13.817L41.1534 9.99028C39.969 7.5887 36.8793 5.60938 34.2531 5.60938H28.357C25.705 5.60938 22.6153 7.5887 21.4309 9.99028L19.5771 13.817C18.8562 15.2421 17.4144 16.1658 15.8438 16.1658C10.2566 16.1658 5.82805 20.9953 6.18852 26.6958L7.52738 48.4948C7.83634 53.9313 10.6943 58.3914 17.8006 58.3914Z"
              stroke="#5A5C5F"
              stroke-width="4.23952"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M27.4277 21.4438H35.1519"
              stroke="#5A5C5F"
              stroke-width="4.23952"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M31.2898 47.8348C35.8985 47.8348 39.6576 43.9817 39.6576 39.2577C39.6576 34.5338 35.8985 30.6807 31.2898 30.6807C26.681 30.6807 22.9219 34.5338 22.9219 39.2577C22.9219 43.9817 26.681 47.8348 31.2898 47.8348Z"
              stroke="#5A5C5F"
              stroke-width="4.23952"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
          <div id="preview-back-side-${uniqueId}" class="preview--box"></div>
        </label>
        <input
          accept="image/*"
          type="file"
          name=""
          id="back-side-${uniqueId}"
        />
        <span>Back Side</span>
      </div>
      <div class="label-container">
        <label for="others-${uniqueId}" class="others-${uniqueId}">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="63"
            height="64"
            viewBox="0 0 63 64"
            fill="none"
            id="svgIcon-others-${uniqueId}"
          >
            <path
              d="M17.8006 58.3914H44.7838C51.89 58.3914 54.7222 53.9313 55.0569 48.4948L56.3958 26.6958C56.7563 20.9953 52.3277 16.1658 46.7406 16.1658C45.17 16.1658 43.7281 15.2421 43.0072 13.817L41.1534 9.99028C39.969 7.5887 36.8793 5.60938 34.2531 5.60938H28.357C25.705 5.60938 22.6153 7.5887 21.4309 9.99028L19.5771 13.817C18.8562 15.2421 17.4144 16.1658 15.8438 16.1658C10.2566 16.1658 5.82805 20.9953 6.18852 26.6958L7.52738 48.4948C7.83634 53.9313 10.6943 58.3914 17.8006 58.3914Z"
              stroke="#5A5C5F"
              stroke-width="4.23952"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M27.4277 21.4438H35.1519"
              stroke="#5A5C5F"
              stroke-width="4.23952"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M31.2898 47.8348C35.8985 47.8348 39.6576 43.9817 39.6576 39.2577C39.6576 34.5338 35.8985 30.6807 31.2898 30.6807C26.681 30.6807 22.9219 34.5338 22.9219 39.2577C22.9219 43.9817 26.681 47.8348 31.2898 47.8348Z"
              stroke="#5A5C5F"
              stroke-width="4.23952"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
          <div id="preview-others-${uniqueId}" class="preview--box"></div>
        </label>
        <input
          accept="image/*"
          type="file"
          name=""
          id="others-${uniqueId}"
        />
        <span>Others Part</span>
      </div>
    </div>
    <div class="upload-image-btn-container">
      <button class="btn1">Cancel</button>
      <button class="btn2">Create Product</button>
    </div>
  </div>
  `;

  uploadMain.appendChild(li);

  // Add event listener for the newly created inputs
  addImageUploadListener(uniqueId);
});
function addImageUploadListener(uniqueId) {
  const fileInputs = ["thumbnail", "front-side", "back-side", "others"];
  fileInputs.forEach(inputType => {
    const input = document.getElementById(`${inputType}-${uniqueId}`);
    console.log(input)
    input.addEventListener("change", function (event) {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
          const previewDiv = document.getElementById(`preview-${inputType}-${uniqueId}`);
          previewDiv.innerHTML = '<img src="' + e.target.result + '" alt="Image Preview">';
          document.getElementById(`svgIcon-${inputType}-${uniqueId}`).style.display = 'none';
          document.querySelector(`.${inputType}-${uniqueId}`).style.padding = 0;
          document.getElementById(`preview-${inputType}-${uniqueId}`).style.height = '140px';
          document.getElementById(`preview-${inputType}-${uniqueId}`).style.width = '140px';
          document.getElementById(`preview-${inputType}-${uniqueId}`).style.borderRadius = '24px';
          console.log(document.getElementById(`svgIcon-${inputType}-${uniqueId}`))
        };
        reader.readAsDataURL(file);
      }
    });
  });
}


// --------------------------------------append stock js---------------------------------//



// thumbnail


const imageUpload1 = document
  .getElementById("thumbnail")
  ?.addEventListener("change", function (event) {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        const previewDiv = document.getElementById("preview1");
        previewDiv.innerHTML =
          '<img src="' + e.target.result + '" alt="Image Preview" >';
        document.getElementById("svgIcon").style.display = "hidden";
      };
      reader.readAsDataURL(file);
    }
  });
// front-side


const imageUpload2 = document
  .getElementById("front-side")
  ?.addEventListener("change", function (event) {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        const previewDiv = document.getElementById("preview2");
        previewDiv.innerHTML =
          '<img src="' + e.target.result + '" alt="Image Preview" >';
        document.getElementById("svgIcon").style.display = "hidden";
      };
      reader.readAsDataURL(file);
    }
  });
// back-side

const imageUpload3 = document
  .getElementById("back-side")
  ?.addEventListener("change", function (event) {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        const previewDiv = document.getElementById("preview3");
        previewDiv.innerHTML =
          '<img src="' + e.target.result + '" alt="Image Preview" >';
        document.getElementById("svgIcon").style.display = "hidden";
      };
      reader.readAsDataURL(file);
    }
  });
// others

const imageUpload4 = document
  .getElementById("others")
  ?.addEventListener("change", function (event) {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        const previewDiv = document.getElementById("preview4");
        previewDiv.innerHTML =
          '<img src="' + e.target.result + '" alt="Image Preview" >';
        document.getElementById("svgIcon").style.display = "hidden";
      };
      reader.readAsDataURL(file);
    }
  });

// ------------preview image js ends ----------------//


// ------------------------------tailoring js starts -----------------------------//



// // Select all the slide elements and the next buttons
let slides = document.querySelectorAll(".tailoring-page");
const nextButton = document.querySelectorAll(".sm--nextBtn");
const chestInput = document.getElementById('chest-input')
const upperNectInput = document.getElementById('upper-neck-input')
const carvicalInput = document.getElementById('carvical-length-input')
const sleeveInput = document.getElementById('sleeve-length-input')
const shoulderInput = document.getElementById('shoulder-accross-input')
const tailoringForm = document.getElementById('tailoring-form')
const tailoringFormSubmitBtn = document.getElementById('tailoring-form-submit-btn')

if(tailoringFormSubmitBtn) {
  tailoringFormSubmitBtn.addEventListener('click', () => {
    tailoringForm.submit()
  })
}



  let currentIndex = 0; // This keeps track of the current slide index

  // Function to show the current slide and hide all others
  
 
    const showSlide = () => {
      if(slides && slides.length > 0){
        slides.forEach((item) => item.classList.remove("sm--active--slide")); // Hide all slides
        slides[currentIndex].classList.add("sm--active--slide"); // Show the current slide
      }

    };
  
  
  
  
  // List of all error message elements by their IDs
  const errorMessages = [
    "sm-error-message0",
    'sm-error-message2',
    'sm-error-message3',
    'sm-error-message4',
    'sm-error-message5',
    'sm-error-message6',
    'sm-error-message7',
    'sm-error-message8',
    'sm-error-message9',
    'sm-error-message10',
    'sm-error-message11',
    'sm-error-message12',
    'sm-error-message13'
  ].map(id => document.getElementById(id));
  
  
  // Function to get the selected input for a given name
  const getSelectedInput = (name) => document.querySelector(`input[name="${name}"]:checked`);
  
  // Function to validate the current slide
  const validateSlide = () => {
    // Define validation rules for each slide
    const validations = [
      () => [!!chestInput.value && !!upperNectInput.value && !!carvicalInput.value && !!shoulderInput.value && sleeveInput.value ],
      () => [!!getSelectedInput("placket-input")],
      () => [!!getSelectedInput("collar-input"), !!getSelectedInput("front-pleat-input")],
      () => [!!getSelectedInput("cuff-input"), !!getSelectedInput("standard-input")],
      () => [!!getSelectedInput("chest-pocket-input")],
      () => [!!getSelectedInput("side-pocket-input")],
      () => [!!getSelectedInput("pen-pocket-input"), !!getSelectedInput("fit-type-input")],
      () => [!!getSelectedInput("sleeve-input"), !!getSelectedInput("button-input")],
      () => [!!getSelectedInput("back-pleat-input")],
      () => [true], // Last slide validation is always true
      () => [true] // Last slide validation is always true
    ];
    return validations[currentIndex]();
  };
  
  // Function to hide all error messages
  const hideAllErrorMessages = () => {
    errorMessages.forEach(msg => msg.style.display = 'none'); // Hide all error messages
  };
  
  // Function to display error messages based on validations
  const displayErrorMessages = (validations) => {
    // Define error messages for each slide
    const slideErrorMessages = [
      ['sm-error-message0'],
      ['sm-error-message2'],
      ['sm-error-message3', 'sm-error-message4'],
      ['sm-error-message5', 'sm-error-message6'],
      ['sm-error-message7'],
      ['sm-error-message8'],
      ['sm-error-message9', 'sm-error-message10'],
      ['sm-error-message11', 'sm-error-message12'],
      ['sm-error-message13']
    ][currentIndex];
    
    validations.forEach((isValid, index) => {
      const errorMessage = document.getElementById(slideErrorMessages[index]);
      if (errorMessage) {
        errorMessage.style.display = isValid ? 'none' : 'block'; // Show or hide error messages
      }
    });
  };
  
  // Add event listeners to next buttons to handle slide changes and validation
  nextButton?.forEach((btn) => {
    btn.addEventListener("click", (event) => {
      event.preventDefault(); // Prevent default form submission
  
      const inputValidation = chestInput !== '' && carvicalInput !== '' && upperNectInput !== '' && sleeveInput !== '' && shoulderInput !== ''

    
  
      const validations = validateSlide(); // Validate the current slide
      if (validations?.every(Boolean) ) { // If all validations pass
        hideAllErrorMessages(); // Hide all error messages
        if (currentIndex < slides.length - 1) {
          currentIndex++; // Move to the next slide
          showSlide(); // Show the new current slide
        }
      } else {
        displayErrorMessages(validations); // Display error messages if any validation fails
      }
    });
  });
  
  // Function to add change listeners to inputs to dynamically show/hide error messages
  const addChangeListener = (inputId, errorMsgId) => {
    const inputElement = document.getElementById(inputId); // Get the input element by ID
    if (inputElement) {
      inputElement.addEventListener('change', function() {
        const errorMessage = document.getElementById(errorMsgId); // Get the error message element by ID
        if (errorMessage) {
          errorMessage.style.display = this.checked ? 'none' : 'block'; // Show or hide error message
        }
      });
    }
  };
  
  // Add change listeners for all relevant inputs
  [
    {id: 'fabric1', errorMsgId: 'sm-error-message1'},
    {id: 'fabric2', errorMsgId: 'sm-error-message1'},
    {id: 'placket1', errorMsgId: 'sm-error-message2'},
    {id: 'placket2', errorMsgId: 'sm-error-message2'},
    {id: 'collar1', errorMsgId: 'sm-error-message3'},
    {id: 'collar2', errorMsgId: 'sm-error-message3'},
    {id: 'front-pleat1', errorMsgId: 'sm-error-message4'},
    {id: 'front-pleat2', errorMsgId: 'sm-error-message4'},
    {id: 'cuff1', errorMsgId: 'sm-error-message5'},
    {id: 'cuff2', errorMsgId: 'sm-error-message5'},
    {id: 'standard1', errorMsgId: 'sm-error-message6'},
    {id: 'standard2', errorMsgId: 'sm-error-message6'},
    {id: 'chest-pocket1', errorMsgId: 'sm-error-message7'},
    {id: 'chest-pocket2', errorMsgId: 'sm-error-message7'},
    {id: 'chest-pocket3', errorMsgId: 'sm-error-message7'},
    {id: 'chest-pocket4', errorMsgId: 'sm-error-message7'},
    {id: 'side-pocket1', errorMsgId: 'sm-error-message8'},
    {id: 'side-pocket2', errorMsgId: 'sm-error-message8'},
    {id: 'side-pocket3', errorMsgId: 'sm-error-message8'},
    {id: 'side-pocket4', errorMsgId: 'sm-error-message8'},
    {id: 'side-pocket5', errorMsgId: 'sm-error-message8'},
    {id: 'side-pocket6', errorMsgId: 'sm-error-message8'},
    {id: 'side-pocket7', errorMsgId: 'sm-error-message8'},
    {id: 'side-pocket8', errorMsgId: 'sm-error-message8'},
    {id: 'side-pocket9', errorMsgId: 'sm-error-message8'},
    {id: 'pen-pocket1', errorMsgId: 'sm-error-message9'},
    {id: 'pen-pocket2', errorMsgId: 'sm-error-message9'},
    {id: 'fit-type1', errorMsgId: 'sm-error-message10'},
    {id: 'fit-type2', errorMsgId: 'sm-error-message10'},
    {id: 'sleeve1', errorMsgId: 'sm-error-message11'},
    {id: 'sleeve2', errorMsgId: 'sm-error-message11'},
    {id: 'button1', errorMsgId: 'sm-error-message12'},
    {id: 'button2', errorMsgId: 'sm-error-message12'},
    {id: 'back-pleat1', errorMsgId: 'sm-error-message13'},
    {id: 'back-pleat2', errorMsgId: 'sm-error-message13'}
  ].forEach(item => addChangeListener(item.id, item.errorMsgId));
  
  // Show the first slide initially
  showSlide();


// -----------------------------tailoring js ends-------------------------------



// --------------------------- Tailoring  Updated Step Form Starts -----------------------------//



// // Select all the slide elements and the next buttons
let slides2 = document.querySelectorAll(".tailoring-page2");
const nextButton2 = document.querySelectorAll(".sm--nextBtn2");
const tailoringForm2 = document.getElementById('tailoring-form2')
const tailoringFormSubmitBtn2 = document.getElementById('tailoring-form-submit-btn2')

if(tailoringFormSubmitBtn2) {
  tailoringFormSubmitBtn2.addEventListener('click', () => {
    tailoringForm2.submit()
  })
}



  let currentIndex2 = 0; // This keeps track of the current slide index

  // Function to show the current slide and hide all others
  
 
    const showSlide2 = () => {
      if(slides2 && slides2.length > 0){
        slides2.forEach((item) => item.classList.remove("sm--active--slide")); // Hide all slides
        slides2[currentIndex2].classList.add("sm--active--slide"); // Show the current slide
      }

    };
  
  
  
  
  // List of all error message elements by their IDs
  const errorMessages2 = [
    'sm2-error-message2',
    'sm2-error-message3',
    'sm2-error-message4',
    'sm2-error-message5',
    'sm2-error-message6',
    'sm2-error-message7',
    'sm2-error-message8',
    'sm2-error-message9',
    'sm2-error-message10',
    'sm2-error-message11',
    'sm2-error-message12',
    'sm2-error-message13'
  ].map(id => document.getElementById(id));
  
  
  // Function to get the selected input for a given name
  const getSelectedInput2 = (name) => document.querySelector(`input[name="${name}"]:checked`);
  
  // Function to validate the current slide
  const validateSlide2 = () => {
    // Define validation rules for each slide
    const validations2 = [
      () => [!!getSelectedInput("placket-input")],
      () => [!!getSelectedInput("collar-input"), !!getSelectedInput("front-pleat-input")],
      () => [!!getSelectedInput("cuff-input"), !!getSelectedInput("standard-input")],
      () => [!!getSelectedInput("chest-pocket-input")],
      () => [!!getSelectedInput("side-pocket-input")],
      () => [!!getSelectedInput("pen-pocket-input"), !!getSelectedInput("fit-type-input")],
      () => [!!getSelectedInput("sleeve-input"), !!getSelectedInput("button-input")],
      () => [!!getSelectedInput("back-pleat-input")],
      () => [true], // Last slide validation is always true
      () => [true] // Last slide validation is always true
    ];
    return validations2[currentIndex2]();
  };
  
  // Function to hide all error messages
  const hideAllErrorMessages2 = () => {
    errorMessages2.forEach(msg => msg.style.display = 'none'); // Hide all error messages
  };
  
  // Function to display error messages based on validations
  const displayErrorMessages2 = (validations2) => {
    // Define error messages for each slide
    const slideErrorMessages2 = [
      ['sm2-error-message2'],
      ['sm2-error-message3', 'sm2-error-message4'],
      ['sm2-error-message5', 'sm2-error-message6'],
      ['sm2-error-message7'],
      ['sm2-error-message8'],
      ['sm2-error-message9', 'sm2-error-message10'],
      ['sm2-error-message11', 'sm2-error-message12'],
      ['sm2-error-message13']
    ][currentIndex2];
    
    validations2.forEach((isValid, index) => {
      const errorMessage2 = document.getElementById(slideErrorMessages2[index]);
      if (errorMessage2) {
        errorMessage2.style.display = isValid ? 'none' : 'block'; // Show or hide error messages
      }
    });
  };
  
  // Add event listeners to next buttons to handle slide changes and validation
  nextButton2?.forEach((btn) => {
    btn.addEventListener("click", (event) => {
      event.preventDefault(); // Prevent default form submission
  
      const inputValidation = chestInput !== '' && carvicalInput !== '' && upperNectInput !== '' && sleeveInput !== '' && shoulderInput !== ''

    
  
      const validations2 = validateSlide2(); // Validate the current slide
      if (validations2?.every(Boolean) ) { // If all validations pass
        hideAllErrorMessages2(); // Hide all error messages
        if (currentIndex2 < slides2.length - 1) {
          currentIndex2++; // Move to the next slide
          showSlide2(); // Show the new current slide
        }
      } else {
        displayErrorMessages2(validations2); // Display error messages if any validation fails
      }
    });
  });
  
  // Function to add change listeners to inputs to dynamically show/hide error messages
  const addChangeListener2 = (inputId, errorMsgId) => {
    const inputElement = document.getElementById(inputId); // Get the input element by ID
    if (inputElement) {
      inputElement.addEventListener('change', function() {
        const errorMessage2 = document.getElementById(errorMsgId); // Get the error message element by ID
        if (errorMessage2) {
          errorMessage2.style.display = this.checked ? 'none' : 'block'; // Show or hide error message
        }
      });
    }
  };
  
  // Add change listeners for all relevant inputs
  [
   
    {id: 'saved-placket1', errorMsgId: 'sm2-error-message2'},
    {id: 'saved-placket2', errorMsgId: 'sm2-error-message2'},
    {id: 'saved-collar1', errorMsgId: 'sm2-error-message3'},
    {id: 'saved-collar2', errorMsgId: 'sm2-error-message3'},
    {id: 'saved-front-pleat1', errorMsgId: 'sm2-error-message4'},
    {id: 'saved-front-pleat2', errorMsgId: 'sm2-error-message4'},
    {id: 'saved-cuff1', errorMsgId: 'sm2-error-message5'},
    {id: 'saved-cuff2', errorMsgId: 'sm2-error-message5'},
    {id: 'saved-standard1', errorMsgId: 'sm2-error-message6'},
    {id: 'saved-standard2', errorMsgId: 'sm2-error-message6'},
    {id: 'saved-chest-pocket1', errorMsgId: 'sm2-error-message7'},
    {id: 'saved-chest-pocket2', errorMsgId: 'sm2-error-message7'},
    {id: 'saved-chest-pocket3', errorMsgId: 'sm2-error-message7'},
    {id: 'saved-chest-pocket4', errorMsgId: 'sm2-error-message7'},
    {id: 'saved-side-pocket1', errorMsgId: 'sm2-error-message8'},
    {id: 'saved-side-pocket2', errorMsgId: 'sm2-error-message8'},
    {id: 'saved-side-pocket3', errorMsgId: 'sm2-error-message8'},
    {id: 'saved-side-pocket4', errorMsgId: 'sm2-error-message8'},
    {id: 'saved-side-pocket5', errorMsgId: 'sm2-error-message8'},
    {id: 'saved-side-pocket6', errorMsgId: 'sm2-error-message8'},
    {id: 'saved-side-pocket7', errorMsgId: 'sm2-error-message8'},
    {id: 'saved-side-pocket8', errorMsgId: 'sm2-error-message8'},
    {id: 'saved-side-pocket9', errorMsgId: 'sm2-error-message8'},
    {id: 'saved-pen-pocket1', errorMsgId: 'sm2-error-message9'},
    {id: 'saved-pen-pocket2', errorMsgId: 'sm2-error-message9'},
    {id: 'saved-fit-type1', errorMsgId: 'sm2-error-message10'},
    {id: 'saved-fit-type2', errorMsgId: 'sm2-error-message10'},
    {id: 'saved-sleeve1', errorMsgId: 'sm2-error-message11'},
    {id: 'saved-sleeve2', errorMsgId: 'sm2-error-message11'},
    {id: 'saved-button1', errorMsgId: 'sm2-error-message12'},
    {id: 'saved-button2', errorMsgId: 'sm2-error-message12'},
    {id: 'saved-back-pleat1', errorMsgId: 'sm2-error-message13'},
    {id: 'saved-back-pleat2', errorMsgId: 'sm2-error-message13'}
  ].forEach(item => addChangeListener2(item.id, item.errorMsgId));
  
  // Show the first slide initially
  showSlide2();


// -----------------------------tailoring js ends-------------------------------


// ----------------- Solaiman js ends-----------------//


// <------------------------------- Bishal Js starts updated -------------------->

document?.addEventListener('DOMContentLoaded', function() {
  const imageContainer = document.querySelector('.file-upload');
  const fileInput = document.getElementById('file-input');
  const previewImage = document.getElementById('preview-image');
  const addPicText = document.querySelector('.bi-add-pic');
  const addPicTextSize = document.querySelector('.bi-add-pic-size');
  
  if (imageContainer && fileInput && previewImage && addPicText && addPicTextSize) {
    fileInput.addEventListener('change', function() {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          addPicText.style.display = "none";
          addPicTextSize.innerHTML = file.name;
        };
        reader.readAsDataURL(file);
      }
    });
    
    imageContainer.addEventListener('click', function() {
      fileInput.click();
    });
  }
  

  
  // Multi-step form functionality---Add Manually
  const slides_add_manually = document.querySelectorAll(
    "[data-add-manually-step]"
  );
  const nextBtn_add_manually = document.querySelectorAll(
    "[data-add-manually-next]"
  );
  const prevBtn_add_manually = document.querySelectorAll(
    "[data-add-manually-previous]"
  );
  const closeModal_add_manually = document.querySelector(
    "[data-add-manually-close]"
  );
  const modal_add_manually = document.getElementById("bi-add-manually");
  const errorMessageAddManually = document.querySelector(
    ".error-message-add-manually"
  );
  const submitAddManually = document.querySelector(
    "[data-add-manually-submit]"
  );
  const multiStepFormAddManually = document.querySelector(
    "[data-add-manually-multistep-form ]"
  );
  let addManuallyCurrentIndex = 0;

  // Function to show the current slide
  const showSlideAddManully = () => {
    slides_add_manually.forEach((item, index) => {
      
      if (item) {
        if (index === addManuallyCurrentIndex) {
          item.classList.add("add-manually-active-step");
        } else {
          item.classList.remove("add-manually-active-step");
        }
      }
    });
  };

  // Initialize: show the first slide
  showSlideAddManully();
  // Event listener for next button clicks
  nextBtn_add_manually.forEach((btn) => {
    btn.addEventListener("click", (event) => {
      event.preventDefault();
      // Validate fields before proceeding to the next step
      if (validateCurrentStepAddManually()) {
        // Increment the index to show the next step
        addManuallyCurrentIndex++;
        showSlideAddManully();
        // Hide error message if validation succeeds
        errorMessageAddManually.style.display = "none";
      } else {
        // Alert or handle validation error (if necessary)
        errorMessageAddManually.textContent =
          "Please fill in all required fields.";
        errorMessageAddManually.style.display = "block";
      }
    });
  });
  // Event listener for previous button clicks

  prevBtn_add_manually.forEach((btn) => {
    btn.addEventListener("click", (event) => {
      event.preventDefault();
      // Decrement the index to show the previous step
      if (addManuallyCurrentIndex > 0) {
        addManuallyCurrentIndex--;
        showSlideAddManully();
      }
    });
  });

  // Function to validate fields in the current step
  const validateCurrentStepAddManually = () => {
    const fields = slides_add_manually[
      addManuallyCurrentIndex
    ].querySelectorAll("input, textarea, select");
    let isValid = true;

    fields.forEach((field) => {
      if (field.hasAttribute("required")) {
        if (field.type === "radio" || field.type === "checkbox") {
          const groupName = field.getAttribute("name");
          const groupChecked = Array.from(
            slides[currentIndex].querySelectorAll(`input[name='${groupName}']`)
          ).some((input) => input.checked);
          if (!groupChecked) {
            isValid = false;
          }
        } else if (
          field.type === "select-one" ||
          field.type === "select-multiple"
        ) {
          if (
            field.selectedIndex === -1 ||
            !field.options[field.selectedIndex].value
          ) {
            isValid = false;
          }
        } else {
          if (!field.value.trim()) {
            isValid = false;
          }
        }
      }
    });

    return isValid;
  };

  if (closeModal_add_manually) {
    closeModal_add_manually.addEventListener("click", function () {
      // Reset form fields
      const fields = multiStepFormAddManually.querySelectorAll(
        "input, textarea, select"
      );
      fields.forEach((field) => {
        if (field.type === "radio") {
          field.checked = false; // Uncheck radio buttons
        } else {
          field.value = ""; // Reset input values
        }
      });

      // reload the page
      window.location.reload();
      // Reset to the first step
      addManuallyCurrentIndex = 0;
      showSlideAddManully();
    });
  }

  // Event listener for closing the modal when clicking outside
  if (modal_add_manually) {
    modal_add_manually.addEventListener("click", function (event) {
      if (event.target === modal_add_manually) {
        // Reset form fields
        const fields = multiStepFormAddManually.querySelectorAll(
          "input, textarea, select"
        );
        fields.forEach((field) => {
          if (field.type === "radio") {
            field.checked = false; // Uncheck radio buttons
          } else {
            field.value = ""; // Reset input values
          }
        });
        window.location.reload();
        // Reset to the first step
        addManuallyCurrentIndex = 0;
        showSlideAddManully();
      }
    });
  }

  // Event listener for addMeasurementBtn
  if (submitAddManually) {
    submitAddManually.addEventListener("click", function (event) {
      event.preventDefault();
      if (validateCurrentStepAddManually()) {
        // Close modal and reset slide
        modal_add_manually.style.display = "none";
        addManuallyCurrentIndex = 0;
        showSlideAddManully();
        // Submit the form
        multiStepFormAddManually.submit();
      }
    });
  }
});


// <------------------------------- Bishal js ends updated ----------------------->

function toggleProfile() {
  const dropdown = document.querySelector('.rf-dropdown');
  const rf_dropdown_menu = document.querySelector('.rf-dropdown-menu');

  if (dropdown) {
    dropdown?.addEventListener("click", function (event) {
      if (rf_dropdown_menu) {
        rf_dropdown_menu.classList.toggle('active');
      }
      // Stop propagation to prevent the click event from bubbling up
      event.stopPropagation();
    });

    // Add event listener to the document to close the dropdown when clicking outside
    document.addEventListener("click", function (event) {
      // Check if the click is outside the dropdown
      const isClickInside = dropdown.contains(event.target) || rf_dropdown_menu.contains(event.target);
      if (!isClickInside) {
        rf_dropdown_menu.classList.remove('active');
      }
    });
  }
}

toggleProfile();
// toggle profile



function allCatagoriesDrop() {
  const allctDropDown = document.querySelector(".all--ct--text");
  const all_ct_dropdown = document.querySelector(".dropdown--all--categories--search");

  if (allctDropDown) {
    allctDropDown?.addEventListener("click", function (event) {
      if (all_ct_dropdown) {
        all_ct_dropdown.classList.toggle('activesss');
      }
      // Stop propagation to prevent the click event from bubbling up
      event.stopPropagation();
    });

    // Add event listener to the document to close the dropdown when clicking outside
    document?.addEventListener("click", function (event) {
      // Check if the click is outside the dropdown
      const isClickInside = allctDropDown?.contains(event.target) || all_ct_dropdown?.contains(event.target);
      if (!isClickInside) {
        all_ct_dropdown?.classList.remove('activesss');
      }
    });
  }
}

allCatagoriesDrop();


// const clickWishlist = document.querySelector(".heart--icon--box")
// const wishListDropDown = document.querySelector(".heart--icon--wishlist--wrapper")

// if(clickWishlist){
//   clickWishlist.addEventListener("click", function(){
//     if(wishListDropDown){
//       wishListDropDown.classList.toggle('newActive')
//     }
//   })
// }



function wishListF (){
  
  const clickWishlist = document.querySelector(".heart--icon--box");
  const wishListDropDown = document.querySelector(".heart--icon--wishlist--wrapper");
  
  if (clickWishlist) {
    clickWishlist?.addEventListener("click", function(event) {
      if (wishListDropDown) {
        wishListDropDown.classList.toggle('newActive');
      }
      // Stop propagation to prevent the click event from bubbling up
      event.stopPropagation();
    });
  
    // Add event listener to the document to close the dropdown when clicking outside
    document.addEventListener("click", function(event) {
      // Check if the click is outside the wishlist dropdown
      const isClickInside = clickWishlist?.contains(event.target) || wishListDropDown?.contains(event.target);
      if (!isClickInside) {
        wishListDropDown?.classList.remove('newActive');
      }
    });
  }

}

wishListF()

// wish list








// -------------------------------- Solaiiman New Js Starts -----------------------------------//

const quantityAdd = document.querySelectorAll('.sm-shopping-cart-plus')
const quantityMinus = document.querySelectorAll('.sm-shopping-cart-minus');


quantityAdd?.forEach(item => {
  item.addEventListener('click', () => {
    let itemValue = item.parentNode.children[1].value
    console.log(itemValue);
    if(itemValue < 20) {
      item.parentNode.children[1].value++
    }
  })
})

quantityMinus?.forEach(item => {
  item.addEventListener('click', () => {
    let itemValue = item.parentNode.children[1].value
    console.log(itemValue);
    if(itemValue > 1) {
      item.parentNode.children[1].value--
    }
    
    
  })
})



const chooseTailoringForm = document.getElementById('choose-interface-form')
const chooseTailoringBtn = document.getElementById('choose-tailoring-interface-btn')

const chooseFirstInterfaceForm = document.getElementById('choose-tailoring-first-interface')
const writeYourNameForm = document.getElementById('write-your-name-profile')
const savedProfileForm = document.getElementById('choose-saved-profile-form')


if(chooseTailoringForm) {
  document.getElementById('choose-interface-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission
  
    // Get the selected radio button value
    const selectedOption = document.querySelector('input[name="choose-tailoring"]:checked').value;
    if(selectedOption === "1") {
      chooseFirstInterfaceForm.style.display = 'none'
      writeYourNameForm.style.display = 'block'
    }
    if(selectedOption === "2") {
      event.preventDefault()
      chooseFirstInterfaceForm.style.display = 'none'
      savedProfileForm.style.display = 'block'
    }
  
  });
}




// write your name form functionality

const writeNameForm = document.getElementById('write-name-form')
const writeNameFormButton = document.getElementById('write-name-form-btn')
const yourNameInput = document.getElementById('your-name')


writeNameForm?.addEventListener('submit', (event) => {
  event.preventDefault()
})


// Assuming you have an input element with id="myInput"
const inputElement = document.getElementById('your-name');

// Add an event listener for the 'input' event
inputElement?.addEventListener('input', function(event) {
  event.preventDefault()
    // Get the current value of the input field
    const inputValue = event.target.value;

    
    if(inputValue === '' ) {
      event.preventDefault()
      writeError.style.display = 'block'
      
    }
    if(inputValue !== ''){
      event.preventDefault()
      writeNameFormButton.removeAttribute('disabled')
    }
    
});


// saved profile funtionnality 

const savedForm = document.getElementById('saved-profile-update-form')
const savedFormButton = document.getElementById('saved-profile-submit-btn')

savedForm?.addEventListener('submit', (event) => {
  event.preventDefault()
})


const radioButtons = document.querySelectorAll('input[name="choose-saved-profile-option"]');

// Loop through each radio button and add event listener
radioButtons?.forEach(radioButton => {
  radioButton.addEventListener('change', function() {
    if (this.checked) {
      savedFormButton.removeAttribute('disabled')
    }
  });
});



// -------------------------------- Solaiiman New Js Ends -----------------------------------//



// let activebro = document.querySelectorAll(".phone--down--nav")

// activebro.forEach((e)=>{
//   e.classList.add = "openNav"
//   console.log(e);
// })

