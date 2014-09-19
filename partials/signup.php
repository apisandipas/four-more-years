<section class="sign-up">
    <div class="container">
        <div class="row">
            <div class="col-md-12" >

                <h1>Sign up today.</h1>

                <div class="fat" style="margin-bottom: 45px;">
                    There are two ways to register for the event: as part of a team of up-to four people, or as an individual who will be matched to a team for the event.
                    We've asked you to provide a Github profile or link to a portfolio for each registrant - just to prove you're legit.
                </div>

                <section class="form-response form-success">
                    <h2>GREAT!</h2>
                    <p>You've been successfully registered for the 2nd Annual Doejo Drink N Dev.</p>
                    <p>Nothing left to be now but sit and wait... and tell all your friends on <a href="<?php echo dnd_twitter_share(); ?>" class="twitter-share" data-window-title="Share on Twitter">Twitter</a> and <a href="<?php echo dnd_facebook_share(); ?>" class="facebook-share" data-window-title="Share on Facebook">Facebook!</a></p>


                   
                </section>

                <section class="form-response form-error">
                    <h2>OPPS!</h2>
                    <p>Looks like something may have gone wrong... Maybe try again?</p>
                   
                </section>

                <div class="form-wrap">
                    <div style="margin-bottom: 45px;">
                        <div style="display: block;" class="fat">How are you registering?</div>

                        <input type="radio" name="register-as" id="as-team" value="signup-team" class="register-as" checked>
                        <label for="as-team" onclick="ga('send', 'click', 'Registration Interaction', 'Form Switch', 'Register As Team')">Register as a team.</label>
                        
                        <input type="radio" name="register-as" id="as-individual" value="signup-individual" class="register-as">
                        <label for="as-individual" onclick="ga('send', 'click', 'Registration Interaction', 'Form Switch', 'Register As Individual')">Register as an individual.</label>
                    </div>

                    <section class="signup-team active">
                        <form id="register-team" >
                            <div class="row">
                                <div class="col-md-12" style="margin-bottom: 30px;">
                                    <label for="team_name" class="floating">Team Name</label>
                                    <input type="text" id="team_name" name="team_name" placeholder="Team Name" data-parsley-minlength="5" parsley-required="true">
                                </div>
                            </div>
                            <div class="team-members">
                                
                                <div class="team-member">
                                    <div class="field-wrapper">
                                        <label for="member1-name" class="floating">Name</label>
                                        <input type="text" placeholder="Name" id="member1-name" name="member1-name" data-parsley-required="true">
                                    </div>
                                    <div class="field-wrapper">
                                        <label for="member1-github" class="floating">Github / Portfolio</label>
                                        <input type="text" placeholder="Github / Portfolio" id="member1-github"  name="member1-github" >
                                    </div>
                                    <div class="field-wrapper">
                                        <label for="member1-email" class="floating">Email</label>
                                        <input type="text" data-parsley-type="email" placeholder="Email" id="member1-email" name="member1-email" data-parsley-type="email" data-parsley-required="true">
                                    </div>
                                </div>

                                <div class="team-member">
                                    <div class="field-wrapper">
                                        <label for="member2-name" class="floating">Name</label>
                                        <input type="text" placeholder="Name" id="member2-name"  name="member2-name" >
                                    </div>
                                    <div class="field-wrapper">
                                        <label for="member2-github" class="floating">Github / Portfolio</label>
                                        <input type="text" placeholder="Github / Portfolio" id="member2-github" name="member2-github" >
                                    </div>
                                    <div class="field-wrapper">
                                        <label for="member2-email" class="floating">Email</label>
                                        <input type="text" data-parsley-type="email" placeholder="Email"  id="member2-email" name="member2-email" >
                                    </div>
                                </div>

                                <div class="team-member">
                                    <div class="field-wrapper">
                                        <label for="member3-name" class="floating">Name</label>
                                        <input type="text" placeholder="Name" id="member3-name"  name="member3-name" >
                                    </div>
                                    <div class="field-wrapper">
                                        <label for="member3-github" class="floating">Github / Portfolio</label>
                                        <input type="text" placeholder="Github / Portfolio" id="member3-github" name="member3-github" >
                                    </div>
                                    <div class="field-wrapper">
                                        <label for="member3-email" class="floating">Email</label>
                                        <input type="text" data-parsley-type="email" placeholder="Email"  id="member3-email" name="member3-email" data-parsley-type="email" >
                                    </div>
                                </div>


                                <div class="team-member">
                                    <div class="field-wrapper">
                                        <label for="member4-name" class="floating">Name</label>
                                        <input type="text" placeholder="Name" id="member4-name"  name="member4-name" >
                                    </div>
                                    <div class="field-wrapper">
                                        <label for="member4-github" class="floating">Github / Portfolio</label>
                                        <input type="text" placeholder="Github / Portfolio" id="member4-github" name="member4-github" >
                                    </div>
                                    <div class="field-wrapper">
                                        <label for="member4-email" class="floating">Email</label>
                                        <input type="text" data-parsley-type="email" placeholder="Email"  id="member4-email" name="member4-email" data-parsley-type="email" >
                                    </div>
                                </div>
                                
                              
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" value="Register Team">
                                </div>
                            </div>
                        </form>
                    </section>

                    <section class="signup-individual">
                        <form id="register-individual" data-parsley-validate>
                          <div class="team-member">
                              <div class="field-wrapper">
                                  <label for="member1-name" class="floating">Name</label>
                                  <input type="text" placeholder="Name" id="member1-name"   name="member1-name"  data-parsley-required="true">
                              </div>
                              <div class="field-wrapper">
                                  <label for="member1-github" class="floating">Github / Portfolio</label>
                                  <input type="text" placeholder="Github / Portfolio" id="member1-github" name="member1-github" >
                              </div>
                              <div class="field-wrapper">
                                  <label for="member1-email" class="floating">Email</label>
                                  <input type="text" placeholder="Email" id="member1-email"   name="member1-email" data-parsley-type="email" data-parsley-required="true">
                              </div>
                          </div>  
                          <div class="row">
                              <div class="col-md-12">
                                  <input type="submit" value="Register Individual">
                              </div>
                          </div>    
                        </form>
                    </section>
                </div>
                

                
                

            </div>
        </div>
    </div>
</section>
