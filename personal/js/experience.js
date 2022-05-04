let jobs = document.querySelectorAll("main div");

    for(let c=0; c<jobs.length; c++){
        jobs[c].addEventListener("mouseenter", function(){
            jobs[c].style.backgroundColor = "blue";
        })
    }

    for(let c=0; c<jobs.length; c++){
        jobs[c].addEventListener("mouseleave", function(){
            jobs[c].style.backgroundColor = "rgb(98, 145, 231)";
        })
    }

    for(let c=0; c<jobs.length; c++){
        jobs[c].addEventListener("click", function(){
            let details = jobs[c].children;
            if(jobs[c].firstChild.style.display == "none"){
                for(let z=0; z<details.length; z++){
                    details[z].style.display = "none";
                }
                jobs[c].firstChild.style.display = "block";
            }

            else{
                for(let z=0; z<details.length; z++){
                    details[z].style.display = "block";
                }
                jobs[c].firstChild.style.display = "none";
            }
        })
    }