function open2(url){
    var real_page = location.origin+location.pathname;
    function basename(path) {
        return path.split('/').pop();
        }
     var path = real_page.replace ( basename ( real_page ), "")

    open(path+url)
    
}