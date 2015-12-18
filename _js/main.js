
    $(document).ready(function() {
        $('#name_me_submit_alt').on('click', function(){
            //Dealing with the containers
            var firstnameContainer = $('.bb-wrapper-right-firstname');
            var lastnameContainer = $('.bb-wrapper-right-lastname');
            var imageContainer = $('.bb-wrapper-right-image');
            var orgSrc = $('.bb-wrapper-right-image img');
            //Dealing with the inputs
            var inputFirst = $('#first_name');
            var inputLast = $('#last_name');
            var newfirstName = inputFirst.val();
            var newlastName = inputLast.val();
            var newImage = Math.floor(Math.random() * 16) + 1
            firstnameContainer.text(newfirstName);
            lastnameContainer.text(newlastName);
            orgSrc.attr('src', '/_images/' + newImage + '.png');
        });
    });









