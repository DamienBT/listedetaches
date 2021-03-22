$(document).ready(function () {

    $("btn#buttonEdit").hide();

    init();
    function resetState() {
        $("btn#buttonSend").show();
        $("btn#buttonEdit").hide();

        $("#task_name").val("");
        $("#task_description").val("");
        $("#task_beginAt").val("");

    }

    function checkData(name, desc, date) {
        $("#task_name").removeClass("is-invalid");
        $("#task_beginAt").removeClass("is-invalid");

        var error = false;

        if (name == "") {
            $("#task_name").addClass("is-invalid");
            error = true;
        }
        if (date == "") {
            $("#task_beginAt").addClass("is-invalid");
            error = true;
        }

        if (error == true) {
            return false;
        } else {
            return true;
        }

    };

    // delete

    function init() {


        $("btn[data-action='delete'").on("click", function (e) {
            let dataid = $(this).attr("data-id");
            let url = '/delete-tache/' + dataid;

            let row = $(this).closest("tr");
            $.ajax({ type: "POST", url: url, success: function () { } })
            $(row).remove();

            return false;
        });

        // edit

        $("btn[data-action='save'").on("click", function (e) {
            let date = $("#task_beginAt").val();
            let name = $("#task_name").val();
            let desc = $("#task_description").val();
            let id = $(this).attr("data-id");
            json = {
                name: name,
                desc: desc,
                date: date
            }
            if (checkData(name, desc, date) == true) {
                $.ajax({
                    type: "POST",
                    url: '/edit-tache/' + id,
                    data: json
                })
                $("td.columnName" + id).empty();
                $("td.columndesc" + id).empty();
                $("td.columndate" + id).empty();
                $("td.columnName" + id).text(name);
                $("td.columndesc" + id).text(desc);
                $("td.columndate" + id).text(date);
                resetState();

                return false;
            };

        });


        $("btn[data-action='create'").on("click", function (e) {
            var id = null;
            let date = $("#task_beginAt").val();
            let name = $("#task_name").val();
            let desc = $("#task_description").val();
            json = {
                name: name,
                desc: desc,
                date: date
            }
            if (checkData(name, desc, date) == true) {
                $.ajax({
                    type: "POST",
                    url: '/nouvelle-tache',
                    data: json,
                    success: function (data) {
                        updateTask(data, name, desc, date);
                        console.log(data.id);
                        location.reload();
                    }
                })
                resetState();
                return false;
            };

        });

        $("btn[data-action='edit'").on("click", function (e) {
            console.log('test');
            let id = $(this).attr("data-id");
            let name = $("td.columnName" + id).text();
            let desc = $("td.columndesc" + id).text();
            let date = $("td.columndate" + id).text();

            $("#task_name").val(name);
            $("#task_description").val(desc);
            $("#task_beginAt").val(date);
            $("btn#buttonSend").hide();
            $("btn#buttonEdit").show();
            $("btn#buttonEdit").attr('data-id', id);
        })

        return false;

    }

    function updateTask(data, name, desc, date) {
        $('.table').append('<tr id="' + data.id + '"><td class="columnName' + data.id + '">' + name + '</td><td class="columndesc' + data.id + '">' + desc + '</td><td class="columndate' + data.id + '">' + date + '</td><td><btn class="btn btn-sm btn-info" data-action="edit" data-id="' + data.id + '">Editer</btn> <btn class="btn btn-sm btn-danger" data-action="delete" data-id="' + data.id + '">Supprimer</btn></td></tr >');
        $("td.columnName" + data.id).text(name);
        $("td.columndesc" + data.id).text(desc);
        $("td.columndate" + data.id).text(date);
    }



    // jquery datepicker translation
    var dateToday = new Date();
    $('.datetimepicker').datepicker({
        altField: ".datepicker",
        closeText: 'Fermer',
        prevText: 'Précédent',
        nextText: 'Suivant',
        currentText: 'Aujourd\'hui',
        monthNames: [
            'Janvier',
            'Février',
            'Mars',
            'Avril',
            'Mai',
            'Juin',
            'Juillet',
            'Août',
            'Septembre',
            'Octobre',
            'Novembre',
            'Décembre'
        ],
        monthNamesShort: [
            'Janv.',
            'Févr.',
            'Mars',
            'Avril',
            'Mai',
            'Juin',
            'Juil.',
            'Août',
            'Sept.',
            'Oct.',
            'Nov.',
            'Déc.'
        ],
        dayNames: [
            'Dimanche',
            'Lundi',
            'Mardi',
            'Mercredi',
            'Jeudi',
            'Vendredi',
            'Samedi'
        ],
        dayNamesShort: [
            'Dim.',
            'Lun.',
            'Mar.',
            'Mer.',
            'Jeu.',
            'Ven.',
            'Sam.'
        ],
        dayNamesMin: [
            'D',
            'L',
            'M',
            'M',
            'J',
            'V',
            'S'
        ],
        weekHeader: 'Sem.',
        changeMonth: true,
        changeYear: true,
        dateFormat: "dd/mm/yy",
        minDate: dateToday,
        firstDay: 1
    });
});
