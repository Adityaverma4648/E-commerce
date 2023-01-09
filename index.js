console.log("phir agya tu nirlajjaaa")


const categoriesCont = document.getElementById("categoriesCont");
const choosenCategoryCont = document.getElementById("choosenCategoryCont");



//  setCategories add eventlstner
categoriesCont.addEventListener("click",(e)=>{
    var selectedCategory = "";
   if(e.target.tagName === "SMALL"){
    console.log(e.target.className);
    selectedCategory = e.target.className;
    const fetchChoosenCategories = (selectedCategory)=>{
         baseUrl = 'https://dummyjson.com/products/category/'
         modifiedUrl = baseUrl + selectedCategory;
         console.log(modifiedUrl)
        fetch(modifiedUrl)
        .then(res => res.json())
        .then((data)=>{
            console.log(data)
             choosenCategoryCont.innerHTML = "";

             data.products.map((d)=>{
              const category = d.category;
              const brand = d.brand;
              const stock = d.stock?true:false;
              const price = d.price;
              const desc = d.desciption;
              const discountPercentage = d.discountPercentage;
              const marketValue = price + (discountPercentage/100)*price;
              const rating = d.rating;
                 const replaceMentImg = "https://cdn.shopify.com/s/files/1/0008/9260/0356/files/nav-best_600x600_variety_600x.png?v=1619452753";
              const imageArray = [replaceMentImg,replaceMentImg,replaceMentImg, replaceMentImg]
         
              var content = ` <div class="choosenCatProductsCont"><div class="path"><small>${category}>${brand}</small></div><div class="body"><div class="imgCont"><div class="smallShow"><img src="`+ imageArray[0] +` alt="prod-img"><img src="`+ imageArray[1] +` alt="prod-img"><img src="`+ imageArray[2] +` alt="prod-img"><img src="`+ imageArray[3] +` alt="prod-img"></div><div class="largeShow"><img src="`+ imageArray[0] +` alt="prod-img"></div></div>
              <div class="details"><h5>${brand}</h5><strong>${price}</strong><span class="text-decoration-line-throug{marketValue}</span></div></div></div>`
              return(
              choosenCategoryCont.innerHTML += content
              )
             })

           
        });

    }
    fetchChoosenCategories(e.target.className);
   }
})


//  categories fetcher

const fetchCategories = ()=>{
    fetch('https://dummyjson.com/products/categories')
.then(res => res.json())
.then((data)=>{
         categoriesCont.innerHTML = ''; 
        data?.map((d)=>{
            const catText = d;
            var catElem = `<li><button type="button"><small class="`+catText+`">${catText}</small></button></li>`
            return(
               categoriesCont.innerHTML += catElem

            )
        })
});
}


fetchCategories();