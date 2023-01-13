console.log("nirlajjaaa tu phir agya")

const categoriesCont = document.getElementById("categoriesCont");
const choosenCategoryCont = document.getElementById("choosenCategoryCont");
const parentCloseBtn = document.querySelector(".closeBtn");
const closeBtn = document.getElementById("closeBtn");
const closeChoosenCategoryBtn = document.getElementById("closeChoosenCategoryBtn");
//  warning section
const warning = document.getElementById("warning");
const accountsList = document.getElementById("accountsList")


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
fetchCategories();


//  closing the choosen category
closeChoosenCategoryBtn.addEventListener("click",()=>{
     console.log("closeitmf") 
     choosenCategoryCont.innerHTML = "";
})

//  setCategories add eventlstner
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
         
              var content = `<div class="choosenCatProductsCont"><div class="path"><small>${category} > ${brand}</small></div><div class="body"><div class="imgCont"><div class="smallShow mx-1"><img src="`+ imageArray[0] +` alt="prod-img"><img src="`+ imageArray[1] +` alt="prod-img"><img src="`+ imageArray[2] +` alt="prod-img"><img src="`+ imageArray[3] +` alt="prod-img"></div><div class="largeShow"><img src="`+ imageArray[0] +` alt="prod-img"></div></div>
              <div><h5 class="px-2"><strong>${brand}</strong></h5>
              <div class="bg-success text-center">Only at  <strong>${price}-Rs</strong>
              <span class="text-decoration-line-through">(${marketValue}-Rs)</span></div>
              <span class="py-1 button-group text-white" id="button-group"><button type="button" class="col-sm-6 py-1">Cart</button><button type="button" class="col-sm-6 py-1">Favourites</button></span></div></div></div>`
              return(
              choosenCategoryCont.innerHTML += content
              )
             })

           
        });

    }
    fetchChoosenCategories(e.target.className);
   }
})



// function warningFetcher(){
//     accountsList.addEventListener("click",(e)=>{
//        var accountCont = document.createElement("div");
//        accountCont.classList.add("accountCont");
       
//       accountCont.innerHTML = "";
//       var content = `<div class="container-fluid bg-danger d-flex justify-content-center align-items-center"><span></span><div class="body"><h5><strong>Dear user do you have an account?</strong></h5><button type="button" class="btn btn-primary">signUp<button><button type="button" class="btn btn-danger">LogIn<button><button type="button" class="btn btn-success">Login as a guest<button><div><div>`
//       accountCont.innerHTML += content;
//       warning.append(accountCont);
// })
// }

// warningFetcher();
