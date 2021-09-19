function changed () {
   
    //  filename = this.files[0].name;
    var filess = document.getElementById("fileToUpload").files;
    
    document.getElementById('filename-list').innerHTML='';
    for (var i = 0; i < filess.length; i++) {
        document.getElementById('filename-list').innerHTML+=i+1 +'. ' +filess[i].name + "<br>" ;
        
    }


};