    <!-- Modal -->
    <div class="box-modal" id="modal-home">
      <div class="container">
        <div class="box-modal__wrapper">
          <div
            class="box-modal__wrapper__header"
            id="modal-close"
            type="button"
            data-dismiss="modal"
            onclick="document.getElementById('video').pause();"
          >
            X
          </div>

          <div class="box-modal__wrapper__body">
            <iframe
              id="video"
              name="video"
              width="100%"
              height="600"
              src="https://www.youtube.com/embed/qVPX0D1uZbc"
              preload="auto"
              controls="controls"
              frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>
    </div>
    <!-- Box Modal -->
