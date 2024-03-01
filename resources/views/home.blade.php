<h1>Hoc Lap trinh tai unicode</h1>
<?php 
echo date('Y-m-d H:i:s');
if (env('APP_ENV') == 'production'){
    // call api live
    echo "call api live";
} else{
    // call api sandbox
    echo "call api sandbox";
}
echo config('app.env')
?>