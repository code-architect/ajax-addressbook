<?php
/**
 * Created by PhpStorm.
 * User: Code-Architect
 * Date: 22-Dec-14
 * Time: 1:09 AM
 */
include('core/init.php');

// Create a database object
$db = new Database();

// Run query
$db->query("Select * from contacts");
//Save result set
$contacts = $db->resultset();

?>

<div class="row">
    <div class="large-12 columns">
        <table>
            <thead>
            <tr>
                <th width="200">Name</th>
                <th width="130">Phone</th>
                <th width="200">Email</th>
                <th width="250">Address</th>
                <th width="100">Group</th>
                <th width="150">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($contacts as $contact){ ?>
            <tr>
                <td><a href="contact.html"><?php echo $contact->first_name.' '.$contact->last_name; ?></a></td>
                <td><?php echo $contact->phone; ?></td>
                <td><?php echo $contact->email; ?></td>
                <td>
                    <ul>
                        <li><?php echo $contact->address1; ?></li>
                        <li><?php if($contact->address2){ echo$contact->address2; } ?></li>
                        <li><?php echo $contact->city; ?>, <?php echo $contact->state; ?>, <?php echo $contact->zipcode; ?></li>
                    </ul>
                </td>
                <td><?php echo ucfirst($contact->contact_group); ?></td>
                <td>
                    <ul class="button-group">
                        <li>
                            <!-- Edit Data -->
                            <a href="#" class="button tiny" data-reveal-id="addModal<?php echo $contact->id; ?>" data-contact-id="<?php echo $contact->id; ?>">Edit</a>
                            <div id="addModal<?php echo $contact->id; ?>" data-cid="<?php echo $contact->id; ?>" class="reveal-modal editModal" data-reveal>

                                <h2>Edit Contact</h2>
                                <form id="editContact" action="#" method="post">

                                    <div class="row">
                                        <div class="large-6 columns">
                                            <lable>First Name
                                                <input name="first_name" type="text" placeholder="Enter First Name" value="<?php echo $contact->first_name; ?>" />
                                            </lable>
                                        </div>
                                        <div class="large-6 columns">
                                            <label>Last Name
                                                <input name="last_name" type="text" placeholder="Enter Last Name" value="<?php echo $contact->last_name; ?>" />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="large-4 columns">
                                            <label>Email
                                                <input name="email" type="email" placeholder="Enter Email Address" value="<?php echo $contact->email; ?>" />
                                            </label>
                                        </div>
                                        <div class="large-4 columns">
                                            <label>Phone Number
                                                <input name="phone" type="text" placeholder="Enter Email Address" value="<?php echo $contact->phone; ?>" />
                                            </label>
                                        </div>
                                        <div class="large-4 columns">
                                            <label>Contact Group
                                                <select name="contact_group">
                                                    <option value="family" <?php if($contact->contact_group == 'family'){echo 'selected';} ?>>Family</option>
                                                    <option value="friends" <?php if($contact->contact_group == 'friends'){echo 'selected';} ?>>Friends</option>
                                                    <option value="business" <?php if($contact->contact_group == 'business'){echo 'selected';} ?>>Business</option>
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="large-6 columns">
                                            <label>Address 1
                                                <input name="address1" type="text" placeholder="Enter Address 1" value="<?php echo $contact->address1; ?>" />
                                            </label>
                                        </div>
                                        <div class="large-6 columns">
                                            <label>Address 2
                                                <input name="address2" type="text" placeholder="Enter Address 2" value="<?php echo $contact->address2; ?>" />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="large-4 columns">
                                            <label>City
                                                <input name="city" type="text" placeholder="Enter City" value="<?php echo $contact->city; ?>" />
                                            </label>
                                        </div>
                                        <div class="large-4 columns">
                                            <label>State
                                                <input name="state" type="text" placeholder="Enter State" value="<?php echo $contact->state; ?>" />
                                            </label>
                                        </div>
                                        <div class="large-4 columns">
                                            <label>Zipcode
                                                <input name="zipcode" type="text" placeholder="Enter Zipcode" value="<?php echo $contact->zipcode; ?>" />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="large-12 columns">
                                            <label>Note
                                                <textarea name="notes" placeholder="Enter Optional Notes"><?php echo $contact->notes; ?></textarea>
                                            </label>
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="<?php echo $contact->id; ?>" />
                                    <input name="submit" type="submit" class="add-btn button right small" value="Submit" />
                                    <a class="close-reveal-modal">&#215;</a>

                                </form>

                            </div>
                        </li>
                        <!-- Delete data -->
                        <li>
                            <form id="deleteContact" action="#" method="post">
                                <input type="hidden" name="id" value="<?php echo $contact->id; ?>" />
                                <input type="submit" class="delete-btn button tiny [secondery alert success]" value="delete" />
                            </form>
                        </li>
                    </ul>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>