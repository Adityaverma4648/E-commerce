const categoriesCont = document.getElementById("categoriesCont");
const choosenCategoryCont = document.getElementById("choosenCategoryCont");
const parentCloseBtn = document.querySelector(".closeBtn");
const closeBtn = document.getElementById("closeBtn");
const closeChoosenCategoryBtn = document.getElementById("closeChoosenCategoryBtn");

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
         
              var content = `<div class="choosenCatProductsCont py-2"><div class="path bg-success"><small>${category} > ${brand}</small></div><div class="body"><div class="imgCont"><div class="smallShow mx-1"><img src="`+ imageArray[0] +` alt="prod-img"><img src="`+ imageArray[1] +` alt="prod-img"><img src="`+ imageArray[2] +` alt="prod-img"><img src="`+ imageArray[3] +` alt="prod-img"></div><div class="largeShow"><img src="`+ imageArray[0] +` alt="prod-img"></div></div>
              <div><h5 class="px-2"><strong>${brand}</strong></h5>
              <div class="bg-success text-center"><strong>${price}-Rs</strong>
              <span class="text-decoration-line-through">(${marketValue}-Rs)</span></div>
              <span class="py-2 button-group text-white" id="button-group"><button type="button" class="col-sm-6 py-1"><i class="fa fa-cart-plus"></i>Cart</button><button type="button" class="col-sm-6 py-1"><i class="fa fa-star"></i>Favourite</button></span></div></div></div>`
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



//  productFetcher()-----------------------products.php
const myProductCont = document.getElementById('myProductCont');
function productFetcher(page){
   fetch('https://dummyjson.com/products?limit=100')
  .then(res => res.json())
  .then((data)=>{
      myProductCont.innerHTML = "";
      data.products?.slice((page-1)*10,((page-1)*10)+7).map((d)=>{
         var path = 'https://localhost/E-commerce/products/' + d.id;
         // console.log(path)
         var price = (d.price).toFixed(2);
         var content = `<a href=${path} class="text-decoration-none d-flex flex-column justify-content-center align-items-center" id=${d.id}>
           <div class="imgCont img-responsive">
             <img src=${d.thumbnail} alt=${d.title}>
           </div>
             <strong>
               <h5>
                 ${d.title} (${d.brand})
               </h5>
                <small>
                 `+ price +`.Rs
               </small>
             </strong>
           </div>
           <div class="button-group">
           <button type="button" class="btn btn-danger-outline">
             <i class="fa fa-heart"></i>
             Save
           </button>
           <button type="button" class="btn btn-danger-success">   
             <i class="fa fa-cart-plus"></i> 
             AddToCart
           </button>
           </div>
         </div></a>`;
         return (
              myProductCont.innerHTML += content
            );
      });
  });
}
 const myProductPagination = document.getElementById("myProductPagination");
 var Page = "";
        myProductPagination.addEventListener("click", (e) => {
            if (e.target.tagName === "SPAN") {
                Page = e.target.innerHTML;
                productFetcher(Page)
                console.log(Page);
            }
        })

window.onload = (e) =>{
   //  rendering categories
fetchCategories();
   //rendering products
productFetcher(1);
   
};
