<?php
include("../DucHung-PNV-Club-Application/header.php");
?>
<form action="result.php" method="post">

    <div class="form">
        <h3>PNV Club Application</h3>
        <div class="name">
            <label>Name</label>
            <div class="item">
                <input type="text" name="name" id="inp_name">
            </div>
        </div>
        <div class="club">
            <label for="">Club you want to apply</label>
            <div class="item">
                <select name="club" id="clubApply">
                    <option value="Robotic Club">Robotic Club</option>
                    <option value="Football Club">Football Club</option>
                    <option value="PHP Club">PHP Club</option>
                </select>
            </div>
        </div>
        <div class="time">
            <label for="">Be time for you</label>
            <div class="item item1">
                <div>
                    <input type="radio" name="time" id="time1" value="Saturday mornings">
                    <label for="time1">Saturday mornings</label>
                </div>
                <div>
                    <input type="radio" name="time" id="time2" value="Saturday afternoons">
                    <label for="time2">Saturday afternoons</label>
                </div>
                <div>
                   
                    <input type="radio" name="time" id="time3" value="Sunday afternoons">
                    <label for="time3">Sunday afternoons</label>
                </div>
            </div>
        </div>
        <div class="skills">
            <label for="">Yours Skills</label>
            <div class="item item2">
                <div  class="item_col">
                    <div>
                        <input type="checkbox" id="skill1" name="skill[]" value="The best coder">
                        <label for="skill1">The best coder</label>
                        
                    </div>
                    <div>

                        <input type="checkbox" name="skill[]" value="Good in arts">
                        <label for=""> Good in arts</label>
                    </div>
                    <div>

                        <input type="checkbox" name="skill[]" value="A super star">
                        <label for=""> A super star</label>
                    </div>
                    <div>

                        <input type="checkbox" name="skill[]" value="A crazy dancer">
                        <label for=""> A crazy dancer</label>
                    </div>

                </div>
                <div class="item_col">
                    <div>

                        <input type="checkbox" name="skill[]"  value="Singer">
                        <label for=""> Singer</label>
                    </div>
                    <div>

                        <input type="checkbox" name="skill[]" value="Good in design">
                        <label for=""> Good in design</label>
                    </div>
                    <div>

                        <input type="checkbox" name="skill[]" value="The best eater">
                        <label for=""> The best eater</label>
                    </div>
                    <div>

                        <input type="checkbox" name="skill[]" value="Good in speeches"> 
                        <label for="">Good in speeches</label>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" id="butt_submit">SUBMIT !</button>
    </div>


</form>