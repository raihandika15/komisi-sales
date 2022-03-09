function checkAll(data){
    var checkboxes = document.getElementsByTagName('input')
    if(data.checked){
        for(var i = 0; i < checkboxes.length; i++){
            if (checkboxes[i].type == 'checkbox'){
                checkboxes[i].checked = true
            } 
        }
    }else{
        for(var i = 0; i < checkboxes.length; i++){
            if (checkboxes[i].type == 'checkbox') {
                checkboxes[i].checked = false
            }
        }
    }
}