  $(document).ready(function () {
      $('.scrollspy').scrollSpy();
      $(".button-collapse").sideNav();
      $('.slider').slider({
          full_width: true
          , interval: 5000
          , height: 700
      });
      $('.carousel').carousel({
          dist: 0
          , shift: 0
          , padding: 20,

      });
      // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
      $('.modal-trigger').leanModal();
  });
