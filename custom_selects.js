$(document).ready(function() {
    //$("#select_software").selectpicker();


    const add_buttons = document.querySelectorAll(`[id^="add-"]`);
    //console.log(add_buttons);

    add_buttons.forEach(add_button => {
        var part_type = add_button.id.split('-')[1]
            //console.log(part_type);
            //var button_full_name = "add-".concat(part_type);
            //console.log(button_full_name);

        $("#add-".concat(part_type)).click(function() {

            var item_exists = 0;
            //var newitemnum = 100000;
            var input_id_name = "extra_".concat(part_type);

            //console.log(id_name);

            var new_item = document.getElementById(input_id_name);

            //console.log(new_item);

            //Remove spaces and special characters
            var txt_without_extras = new_item.value.replace(/\s/g, '').replace(/[^a-zA-Z ]/g, '');
            console.log(txt_without_extras);
            if (txt_without_extras.length < 1) {
                alert('Invalid '.concat(part_type, ' name'));
                return;
            }

            Array.from(document.querySelector("#select_".concat(part_type)).options).forEach(function(option_element) {

                if (option_element.text.toLowerCase() == new_item.value.toLowerCase()) item_exists = 1;
            });

            if (item_exists != 1) {
                $("#select_".concat(part_type)).append('<option value="' + new_item.value + '" selected="">' + new_item.value + '</option>');
                $("#select_".concat(part_type)).selectpicker("refresh");
                new_item.value = "";
            } else {
                alert(part_type.concat(' Already Exists'));
            }
        });

    });


})