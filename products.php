<div class="container-fluid bg-succcess text-white" id="myProductCont">

</div>

<script>
    var myProductCont = document.getElementById('myProductCont');
    const fetchProducts = () => {
        fetch('https://dummyjson.com/products')
            .then(res => res.json())
            .then((data) => {
                console.log(data);
                const fetchedData = data.map((d) => {
                    return (d)
                })
                myProductCont.append(fetchedData)
            });

    }
</script>