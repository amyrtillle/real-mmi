
        function menuToggle(){
            let cb = document.querySelector('#menu-opener');
            let menu = document.querySelector('#menu-mobile');
            let header = document.getElementById("header-mobile");
            const mediaQuery = window.matchMedia('(min-width: 600px)');
    
            if(cb.checked){
                header.style.zIndex = '100';
                if(mediaQuery.matches){
                    menu.style.transform = 'translateX(50px)';
                }
                else{
                    menu.style.transform = 'translateX(20px)';
                }
            }
            else{
                    menu.style.transform = 'translateX(1000px)';
              
                header.style.zIndex= '-50';
            }
        }

    