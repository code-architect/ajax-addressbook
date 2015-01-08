/**
 * Created by Code-Architect on 22-Dec-14.
 */
$(document).ready(function(){
    //Show loader Image
    $('#loaderImage').show();

    // Show contacts on page load
    showContacts();

    // Add Contact
    $(document).on('submit', '#addContact', function(){
        //Show loader image
        $('#loaderImage').show();

        //Post data from form
        $.post("add_contact.php", $(this).serialize()).done(function(data){
            console.log(data);
            $('#addModal').foundation('reveal', 'close');

            // Reset the form
            $('#addModal').find('input[type=text]').val('');
            $('#addModal').find('input[type=email]').val('');
            $('#addModal').find('textarea[name=notes]').val('');
            $('#addModal').find('select[name=contact_group]').val('');
            showContacts();
        });
        return false;
    });

    // Edit Contact
    $(document).on('submit', '#editContact', function(){
        //Show loader image
        $('#loaderImage').show();

        //Post data from form
        $.post("edit_contact.php", $(this).serialize()).done(function(data){
            console.log(data);
            $('.editModal').foundation('reveal', 'close');
            showContacts();
        });
        return false;
    });

    // Delete Contact
    $(document).on('submit', '#deleteContact', function(){
        //Show loader image
        $('#loaderImage').show();

        //Post data from form
        $.post("delete_contact.php", $(this).serialize()).done(function(data){
            console.log(data);
            showContacts();
        });
        return false;
    });
});

// Show contacts function
function showContacts(){
    //console.log('showing contacts');
    setTimeout("$('#pageContent').load('contacts.php', function(){$('#loaderImage').hide();})", 1000);
}