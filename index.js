window.onload = (event) =>{
const categoriesCont = document.getElementById("categoriesCont");
const choosenCategoryCont = document.getElementById("choosenCategoryCont");
const parentCloseBtn = document.querySelector(".closeBtn");
const closeBtn = document.getElementById("closeBtn");
const closeChoosenCategoryBtn = document.getElementById("closeChoosenCategoryBtn");


//  will be removing this sooon
const accountsList = document.getElementById("accountsList");

// Login DOm
const formContLogin = document.getElementById("formContLogin");

//  regsitrarion DOM
const formContRegistration = document.getElementById("formContRegistration");

//  categories fetcher
const fetchCategories = ()=>{
    fetch('https://dummyjson.com/products/categories')
.then(res => res.json())
.then((data)=>{
         categoriesCont.innerHTML = ''; 
        data?.map((d)=>{
            const catText = d;
            var catElem = `<li><button type="button"><small class="`+catText+`">${catText}</small></button></li>`;
            return(
               categoriesCont.innerHTML += catElem
            );
        })
});
}
//  rendering categories
fetchCategories();


//  closing the choosen category
if(closeChoosenCategoryBtn){
closeChoosenCategoryBtn.addEventListener("click",(e)=>{    
   if(choosenCategoryCont){  
       choosenCategoryCont.innerHTML = "";
   }
})
}

//  setCategories add eventlistner
if(categoriesCont){
categoriesCont.addEventListener("click",(e)=>{
    var selectedCategory = "";
   if(e.target.tagName === "SMALL"){
    selectedCategory = e.target.className;
    const fetchChoosenCategories = (selectedCategory)=>{
         baseUrl = 'https://dummyjson.com/products/category/';
         modifiedUrl = baseUrl + selectedCategory;
         console.log(modifiedUrl)
        fetch(modifiedUrl)
        .then(res => res.json())
        .then((data)=>{
            // console.log(data)
             choosenCategoryCont.innerHTML = "";

             data.products.map((d)=>{
              const category = d.category;
              const brand = d.brand;
              const stock = d.stock?true:false;
              const price = d.price*84;
              const desc = d.desciption;
              const discountPercentage = d.discountPercentage;
              const marketValue = Math.round(price + (discountPercentage/100)*price);
              const rating = d.rating;
                 const replaceMentImg = "https://cdn.shopify.com/s/files/1/0008/9260/0356/files/nav-best_600x600_variety_600x.png?v=1619452753";
              const imageArray = [replaceMentImg,replaceMentImg,replaceMentImg, replaceMentImg]
         
              var content = `<div class="choosenCatProductsCont"><div class="path bg-success"><small>${category} > ${brand}</small></div><div class="body"><div class="imgCont"><div class="smallShow mx-1"><img src="`+ imageArray[0] +` alt="prod-img"><img src="`+ imageArray[1] +` alt="prod-img"><img src="`+ imageArray[2] +` alt="prod-img"><img src="`+ imageArray[3] +` alt="prod-img"></div><div class="largeShow"><img src="`+ imageArray[0] +` alt="prod-img"></div></div>
              <div><h5 class="px-2"><strong>${brand}</strong></h5>
              <div class="bg-success text-center">Only at  <strong>${price}-Rs</strong>
              <span class="text-decoration-line-through">(${marketValue}-Rs)</span></div>
              <span class="py-1 button-group text-white" id="button-group"><button type="button" class="col-sm-6 py-1"><i class="fa fa-cart-plus"></i>Cart</button><button type="button" class="col-sm-6 py-1"><i class="fa fa-star"></i>Favourites</button></span></div></div></div>`
              return(
              choosenCategoryCont.innerHTML += content
              )
             })

           
        });

    }
    fetchChoosenCategories(e.target.className);
   }
})
}


//  login.php 
function loginFormFetcher(){
   if(formContLogin){
   formContLogin.innerHTML= "";
   var formElem = document.createElement("form");
   formElem.setAttribute("method","POST");
   formElem.setAttribute("id","loginForm");
   formElem.classList.add('d-flex','flex-column','py-2','my-1')


//     name field
    var usernameInp = document.createElement("input");
   usernameInp.setAttribute("type","email");
   usernameInp.setAttribute("name","userName");
   usernameInp.setAttribute("id","userName");
   usernameInp.setAttribute("placeholder","Enter userName");
   usernameInp.setAttribute("required","");


// email-field
   var emailInp = document.createElement("input");
   emailInp.setAttribute("type","text");
   emailInp.setAttribute("name","email");
   emailInp.setAttribute("id","email");
   emailInp.setAttribute("placeholder","Enter your email");
   emailInp.setAttribute("required","");


   // password 
      var passwordInp = document.createElement("input");
   passwordInp.setAttribute("type","password");
   passwordInp.setAttribute("name","password");
   passwordInp.setAttribute("id","password");
   passwordInp.setAttribute("placeholder","Enter password");
   passwordInp.setAttribute("required","");


   //  submit
      var submitInp = document.createElement("input");
   submitInp.setAttribute("type","submit");
   submitInp.setAttribute("name","submit");
   submitInp.setAttribute("value","Login");
   submitInp.setAttribute("id","submit");
   submitInp.classList.add('bg-success','border-0','text-white')

   //  var GuestLoginBtn = document.createElement('button');
   //  GuestLoginBtn.setAttribute("type","button");
   //  GuestLoginBtn.
   //  GuestLoginBtn.classList.add("btn-lg","btn-danger",'text-center','text-white','container-fluid');

   formElem.appendChild(usernameInp);
   formElem.appendChild(emailInp);
   formElem.appendChild(passwordInp);
// GuestLoginloginBTn
   // formElem.appendChild(GuestLoginBtn);

   formElem.appendChild(submitInp);
     
   formContLogin.append(formElem);
   }
}
// register.php
function registrationFormFetcher(){
   formContRegistration.innerHTML= "";
   var formElem = document.createElement("form");
   formElem.setAttribute("method","POST");
   formElem.setAttribute("id","registraionForm");
   formElem.classList.add('d-flex','flex-column','py-2','my-1')


//     name field
    var usernameInp = document.createElement("input");
   usernameInp.setAttribute("type","text");
   usernameInp.setAttribute("name","userNameReg");
   usernameInp.setAttribute("id","userNameReg");
   usernameInp.setAttribute("placeholder","Enter userName");
   usernameInp.setAttribute("required","");
    // Age 
      var AgeInp = document.createElement("input");
   AgeInp.setAttribute("type","number");
   AgeInp.setAttribute("name","ageReg");
   AgeInp.setAttribute("id","ageReg");
   AgeInp.setAttribute("placeholder","Enter Age");
   AgeInp.setAttribute("required","");


// email-field
   var emailInp = document.createElement("input");
   emailInp.setAttribute("type","email");
   emailInp.setAttribute("name","emailReg");
   emailInp.setAttribute("id","emailReg");
   emailInp.setAttribute("placeholder","Enter your email");
   emailInp.setAttribute("required","");

   // password 
      var passwordInp = document.createElement("input");
   passwordInp.setAttribute("type","password");
   passwordInp.setAttribute("name","passwordReg");
   passwordInp.setAttribute("id","passwordReg");
   passwordInp.setAttribute("placeholder","Enter password");
   passwordInp.setAttribute("required","");

   //  submit
      var submitInp = document.createElement("input");
   submitInp.setAttribute("type","submit");
   submitInp.setAttribute("name","submitReg");
   submitInp.setAttribute("value","Register");
   submitInp.setAttribute("id","submitReg");
   submitInp.classList.add('bg-success','border-0','text-white')

   formElem.appendChild(usernameInp);
   formElem.appendChild(AgeInp);
   formElem.appendChild(emailInp);
   formElem.appendChild(passwordInp);
   formElem.appendChild(submitInp);

   formContRegistration.append(formElem);
}

//  rendering
loginFormFetcher();
registrationFormFetcher();



//  productFetcher()-----------------------products.php
const myProductCont = document.getElementById('myProductCont');
function productFetcher(){
   fetch('https://dummyjson.com/products')
  .then(res => res.json())
  .then((data)=>{
      console.log(data);
      myProductCont.innerHTML = "";
      data.products?.slice(0,7).map((d)=>{
         var content = `<a href="" class="text-decoration-none d-flex flex-column" id=${d.id}><div>
           <span>
              <small>
                 ${d.category}
              </small>
           </span>
           <div class="img-responsive">
             <img src=${d.thumbnail} alt=${d.title}>
           </div>
           <div>
             <strong>
               <h5>
                 ${d.title} 
               </h5>
             </strong>
             <small>
                ${d.brand} 
             </small>
           </div>
         </div></a>`;
         return (myProductCont.innerHTML += content);
      });
  });
}
productFetcher();
};