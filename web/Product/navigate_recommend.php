<script>
  const url = 'https://floating-coast-17079.herokuapp.com/web/Product/recommend.php/';
  const queryString = decodeURIComponent(window.location.search).replace("?liff.state=", "");
  const params = new URLSearchParams(queryString);
  const param = params.get('message');
  if (param != null && param != '') {
    window.location.assign(url + param);
  } else {
    window.location.assign("https://developers.line.biz");
  }
</script>
