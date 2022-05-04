let skills = document.querySelectorAll(".outerList li");

for(let c = 0; c<skills.length; c++){
    skills[c].addEventListener("mouseenter", function(){
        skills[c].children[0].style.display = "block";
        skills[c].style.backgroundColor = "white";
    })

    skills[c].addEventListener("mouseleave", function(){
        skills[c].children[0].style.display = "none";
        skills[c].style.backgroundColor = "yellow";
    })

    
}

let technical = document.querySelectorAll("#technical > ul > li");

for(let c = 0; c<technical.length; c++){
    technical[c].addEventListener("click", function(){
        let skill = technical[c].childNodes[0].nodeValue;
        let images = document.querySelectorAll("img");
        images[0].setAttribute('src', '../images/skills/'.concat(skill, '/1.jpg'));
        images[1].setAttribute('src', '../images/skills/'.concat(skill, '/2.jpg'));
    })
}
