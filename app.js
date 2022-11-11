const skills = document.getElementById('skills');
const but = document.getElementById('add-skill');
var i=1;
but.onclick = function () {
    const skill_element = document.createElement("div");
    skill_element.classList.add('row');
    skill_element.innerHTML = '<div class="col-md-4"><label>Skill name</label><input name="Skill'+i+'" type="text" class="form-control"></div><div class="col-md-8">    <label>Skill-rate</label>    <input type="range" class="custom-range"id="customRange2" style="display: block;width:100%;" value="100" name="skillrate'+i+'"></div>';
    console.log(i);
    i+=1;
    skills.appendChild(skill_element);
};


const lang = document.getElementById('language');
const but_lang = document.getElementById('add-lang');
var l=1;
but_lang.onclick = function(){
    const lang_element = document.createElement("div");
    lang_element.classList.add('row');
    lang_element.innerHTML = '<div class="col-md-6"><label>Language</label><input type="text" class="form-control" name="language'+l+'"></div><div class="col-md-6">    <label>Level</label>    <select id="inputState" class="form-control" name="langlevel'+l+'">        <option>Native</option>        <option>Intermediate</option>       <option>Beginner</option></select></div>';
    console.log(l);
    l+=1;
    lang.appendChild(lang_element);
};

const exp = document.getElementById('app-info');
const but_exp = document.getElementById('add-exp');
var g=1;
but_exp.onclick = function(){
    const exp_element = document.createElement("div");
    exp_element.classList.add('row');
    exp_element.innerHTML = '<div class="col-md-8"><label>Exeprience | education</label><input type="text" class="form-control" name="expe'+g+'" placeholder="Describe your experience"></div><div class="col-md-4"><label>Date</label><input type="date" class="form-control" name="expdate'+g+'"></div>';
    console.log(g);
    g+=1;
    exp.appendChild(exp_element);
}

const social_section = document.getElementById('soc-info');
const social_but = document.getElementById('add-social');
var s=1;

social_but.onclick = function(){
    const social = document.createElement("div");
    social.classList.add('row');
    social.innerHTML = '<div class="col-md-2"><label>Username</label><input type="text" class="form-control" name="user'+s+'" placeholder="user"></div><div class="col-md-6"><label>Link</label><input type="text" class="form-control" name="link'+s+'" placeholder="Account link"></div><div class="col-md-4"><label>social media</label><select id="inputState" class="form-control" name="social'+s+'""><option>Facebook</option><option>Instagram</option><option>Twitter</option><option>Linkedin</option><option>Github</option><option>Discord</option><option>Website</option></select></div>';
    console.log(s);
    s+=1;
    social_section.appendChild(social);
}
