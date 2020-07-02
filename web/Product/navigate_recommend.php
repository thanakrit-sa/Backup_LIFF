<script>
  const medium = 'https://floating-coast-17079.herokuapp.com/web/Product/recommend/';
  const queryString = decodeURIComponent(window.location.search).replace("?liff.state=", "");
  const params = new URLSearchParams(queryString);
  const id = params.get('id');
  if (id != null && id != '') {
    window.location.assign(medium + id);
  } else {
    window.location.assign("https://developers.line.biz");
  }
</script>
