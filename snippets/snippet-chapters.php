<?php 
$post_id = false;
$chapter_status = get_field('chapter_status',$post_id); 
$chapter_prefix = get_field('chapter_prefix',$post_id); 
$chapter_tag = get_field('chapter_tag',$post_id); // for some reason this didn't work
?>
<?php switch ($chapter_status) : case "on": ?>

  <script>
  chapters: {
      // only run if ID chapters exists
      if (document.body.contains(document.getElementById("chapters"))) {
          // append IDs to H tags
          let articleBody = document.querySelector(".article-body");
          let h3Tags = articleBody.getElementsByTagName("<?php echo $chapter_tag; ?>");
          // add ID to h3 tags so we can scroll to them
          for (i = 0; i < h3Tags.length; i++)
              h3Tags[i].setAttribute("id", i + 1);

          // set data-prefix so we can use pseudo css to add Chapter #1, Chapter #2 etc above h3 tag.
          for (i = 0; i < h3Tags.length; i++)
              h3Tags[i].setAttribute("data-prefix", "<?php echo esc_attr($chapter_prefix); ?>");
          for (i = 0; i < h3Tags.length; i++)
              h3Tags[i].setAttribute("data-prefix-count", i + 1);

          // create Table of contents / chapters from h3 tags within .article-body
          function generateChapters(tag_selector) {
              // tag_selector defined at bottom for some reason

              let postChapters = document.getElementsByTagName(
              tag_selector); // grab each tag that matches selector (h3)

              // create chapters container box to put them in
              let chaptersBox = document.createElement("aside");
              chaptersBox.setAttribute("id", "chapters-box");
              // give the box a heading
              let chaptersHeading = document.createElement("h5");
              chaptersHeading.textContent = "<?php echo esc_attr($chapter_prefix); ?>s";
              chaptersHeading.className = "accordion";
              chaptersBox.appendChild(chaptersHeading);

              // create chapters list and items + assign ID to anchors
              let chaptersList = document.createElement("ol");
              chaptersList.className = "panel";
              for (i = 0; i < postChapters.length; i++) {
                  let anchorId = postChapters[i].getAttribute("id"), // grab chapter ID we created earlier
                      chapterTitle = postChapters[i].firstChild.cloneNode(true),
                      chapterItem = document.createElement("li"),
                      chapterLink = document.createElement("a");
                  chapterLink.setAttribute("href", "#" + anchorId); // assign chapter ID so wecan link to anchor
                  chapterLink.appendChild(chapterTitle);
                  chapterItem.appendChild(chapterLink);
                  chaptersList.appendChild(chapterItem); // add list items to list
              }
              chaptersBox.appendChild(chaptersList); // add list to list box

              let chapters = document.getElementById("chapters");
              chapters.appendChild(chaptersBox); // add list box to sidebar
              chapters.classList.add("chapters");
          }
          // .grab the following tag inside article-body (tag_selector)
          generateChapters("<?php echo $chapter_tag; ?>");
      }
  }
  </script>
  <!-- below code is not working when it's appended via javascript -->
  <script>
  var acc = document.getElementsByClassName("accordion");
  var panel = document.getElementsByClassName("panel");
  var i;
  for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var panel = this.nextElementSibling;
          panel.classList.toggle("hide");
          if (panel.style.maxHeight) {
              panel.style.maxHeight = null;
          } else {
              panel.style.maxHeight = panel.scrollHeight + "px";
          }
      });
  }
  </script>
<?php break; default: ?>
<!-- Default Chapters -->
<?php endswitch; ?>