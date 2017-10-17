<?php
/**
 * Hero setup.
 *
 * @package understrap
 */

?>

    <div class="jumbotron jumbotron-fluid home-jumbotron">

        <div class="container">

            <div class="hero-heading">

                <h1 class="display-3">The Bug Boss</h1>
                <p class="slogan">Contract killing pest for 25 years</p>
                <a href="#" class="cta-hero rounded">Schedule Appointment</a>

           </div>

        </div>
        
        <div class="hero-form">

                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea">Example textarea</label>
                        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                    </div>

                    <fieldset class="form-group">
                        <legend>Radio buttons</legend>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                Option one is this and that&mdash;be sure to include why it's great
                            </label>
                        </div>
                        <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                            Option two can be something else and selecting it will deselect option one
                          </label>
                        </div>
                        <div class="form-check disabled">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                            Option three is disabled
                          </label>
                        </div>
                    </fieldset>

                      <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

    </div>