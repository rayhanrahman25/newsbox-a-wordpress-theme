<ul>
        <?php
        wp_list_comments();
        ?>
    </ul>

                        <!-- Reply Form -->
                       
                            <?php
                              $newsbox_comment_fields = array();
                              $newsbox_comment_fields['author']=<<<EOD
                             <div class="row">
                              <div class="col-12 col-lg-6">
                              <input type="text" id="author" name="author" class="form-control" placeholder="Name*">
                              </div>
                              
EOD;
                              $newsbox_comment_fields['email'] =<<<EOD
                             
                              <div class="col-12 col-lg-6">
                              <input type="email" id="email" name="email" class="form-control" id="email" placeholder="Email*">
                              </div>
                              </div>
                             
EOD;
                              $newsbox_comment_fields['url'] =<<<EOD
                              <div class="row">
                              <div class="col-12">
                              <input type="text" id="url" name="url" class="form-control" id="subject" placeholder="Website">
                              </div>
                              </div>
EOD;
                              $newsbox_comment_field =<<<EOD
                              <div class="row">
                              <div class="col-12">
                                        <textarea name="comment" class="form-control" id="comment" cols="30" rows="10" placeholder="Message"></textarea>
                              </div>
                              </div>
                              
                            
EOD;
                            $newsbox_submitBtn_field =<<<EOD
                            <div class="row">
                            <div class="col-12">
                                        <button class="btn newsbox-btn mt-30" type="submit">Submit Comment</button>
                            </div>
                            </div>
                            
EOD;
                               $newsbox_comment_from_args = array(
                                'fields'=>$newsbox_comment_fields,
                                'comment_field'=>$newsbox_comment_field,
                                'submit_button' =>$newsbox_submitBtn_field,
                                'comment_notes_after'=>'',
                                'comment_notes_before'=>'',
                                'cookies'=>'',
                                'title_reply'=>'',
                               );
                               comment_form( $newsbox_comment_from_args);
                            ?>
                        
                            
                         
                        
                   