<form id="javascript_form">
    <input type="text" name="subjects" placeholder="Subject"/>
    <textarea name="text" placeholder="Message"></textarea>
    <input type="submit" id="js_send" value="Send"/>
</form>
<script>
    var form_id_js = "javascript_form";
    var data_js={ "access_token":"{your access token}"};
    function js_onSuccess()
    {
        window.location=window.location.pathname +"?message=Email+Successfully+Sent%21&isError=0";
    }
    function js_onError(error)
    {
        
    }
</script>
