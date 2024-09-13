var doc, bod, htm;
addEventListener('load', function(){
  doc = document; bod = doc.body; htm = doc.documentElement;
  addEventListener('scroll', function(){
    if (scroll < 100){
        doc.querySelector('.navbar').classList.add("bg-light");
    }
    else{
        doc.querySelector('.navbar').classList.add("bg-dark");
    }
    
  });
});