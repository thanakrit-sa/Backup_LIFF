<script>
function myFunction()
{
  var myJsVar = "สมศักดิ์";
  window.location.href = "authen.php?name=" + myJsVar;
}
</script>
<?
    $id = $_GET['name'];
    echo $id;
?>