<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form name="form" action="" method="get">
  <input type="text" name="subject" id="incrementer" value="0">
</form>


    <input type="button" name="toincrement" value="increment" id="btnc" onclick="increase();">

    <script type="text/javascript">

      function increase(){
        var value = document.getElementById('incrementer').value;

        nvalue = parseInt(value);
        nvalue = nvalue + 1;
        console.log(nvalue);

        document.getElementById('incrementer').value = nvalue;
      }
    </script>

    <?php echo $_GET['subject']; ?>


  </body>
</html>
