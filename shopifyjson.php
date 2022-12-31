<?php

?>

<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script>
    // fetch('https://patpatwholesale.com/products.json?page=1')
    // .then((response) => response.json())
    // .then((json) => console.log(json));
    let url = 'https://patpatwholesale.com/products.json?page=1';
    $.ajax({
        dataType: "json",
        url: url,
        success:function(res){
            // res.forEach(element => {
            //     console.log(element);
            // });
            console.log(res);
            // console.log(res.products.length);
            // for (let index = 0; index < res.products.length; index++) {
            //     console.log(index + '=> Product ID: '+res.products[index].id + ' Product Name: ' + res.products[index].title);
            //     // console.log(res[index]);                
            //     // saveRecord(res.products[index].id, res);
            // }
        }
        });


    function saveRecord(id, res){
        $.ajax({
            type: 'POST',
            dataType: "html",
            data:{id:id, product_data:res},
            url: url,
            success:function(res){

            },
            error:function(){
                console.log('error');
            }
        });
    }


</script>