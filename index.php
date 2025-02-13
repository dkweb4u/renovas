<?php
get_header();
?>

        <section class="hero" style="background-image: url(<?php echo get_theme_file_uri('assets/images/hero/hero.png') ?>);">
            <div class="container">
              <div class="thm-row">
                <div class="thm-col-6">
                  <div class="content">
                    <h1>Your dream <br> home awaits.</h1>
                    <p>Whether you decide to proceed with a single job or use our discount on multiple projects, we take the worry out of home improvements from start to finish.</p>
                    <div class="btn-set">
                        <a href="" class="thm-btn-2">Get Started Now</a>
                        <a href="" class="thm-btn-1">Check Our Services</a>

                    </div>
                  </div>
                </div>
                <div class="thm-col-6">
                    <div class="form-box">
                        <h2>Schedule a Free Consultation</h2>
                        <form action="">
                            
                            <form action="">
                                <input type="text" name="Name" placeholder="Full Name">
                                <input type="email" name="Email" placeholder="Email">
                                <input type="text" name="Phone" placeholder="Phone Number">
                                <select name="Topic">
                                    <option value="">Select a topic</option>
                                    <option value="Option 1">Option 1</option>
                                    <option value="Option 2">Option 2</option>
                                    <option value="Option 3">Option 3</option>
                                </select>
                                <textarea name="Details" placeholder="Details"></textarea>
                                 <button type="submit" class="thm-btn-2">Book A Free Consultation</button>
                            </form>
                        </form>
                    </div>
                </div>
              </div>
            </div>
        </section>

<?php

get_footer();
