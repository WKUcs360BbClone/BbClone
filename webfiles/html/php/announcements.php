<!DOCTYPE html>
<html>
  <head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </head>

  <body>

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <script>

          $.ajax({
              url: './getAnnouncements.php',
              success: function(data, status) {
                console.log(data);

                var dataPassing = data;

                function createAnnouncements(announcementData) {
                  var announcementTemplate = [
                    '<div class="container">',
                    '<div class="announcementslist">',
                    '<ul class="list-group">',
                    '<li class="list-group-item"><p>',
                    announcementData.title,
                    '</p><br /><p>Posted to:', announcementData.postto,
                    '</p><br /><p>Posted by:', announcementData.postby_first, ' ', announcementData.postby_last,
                    '</p><br /><p>Posted on:', announcementData.poston,
                    '</p><br /><p>',
                    announcementData.content,
                    '</p></li></ul></div></div>'
                  ];

                  // a jQuery node
                  return $(announcementTemplate.join(''));

                  }

                var announcements = $();
                // Store all the card nodes
                dataPassing.forEach(function(item, i) {
                announcements = announcements.add(createAnnouncements(item));
                });

                // Add them to the page... for instance the <body>
                $(function() {
                $('body').append(announcements);

              });
            }
          });
          </script>


        </div>
      </div>
    </div>

  </body>
</html>
