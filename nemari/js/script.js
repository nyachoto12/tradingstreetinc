   //    scroll to top script
    mybutton = document.getElementById("return-top");

    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    function tops() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

    //secondary navigation script
    var mainNavLinks = document.querySelectorAll("nav ul li a");
    var mainSections = document.querySelectorAll("main section");
    let lastId;
    let cur = [];
    window.addEventListener("scroll", event => {
        var fromTop = window.scrollY;

        mainNavLinks.forEach(link => {
            var section = document.querySelector(link.hash);

            if (
                section.offsetTop <= fromTop && section.offsetTop + section.offsetHeight > fromTop) {
                link.classList.add("current");
            } else {
                link.classList.remove("current");
            }
        });
    });
