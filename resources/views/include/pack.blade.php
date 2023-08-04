<div class="pt-section pt-features">
    <div class="pt-container">
        <ul>
            <li>
                <div class="pt-content">
                    <span><i class="icon-fire icons"></i></span>
                    <h3>Pack Gratuit</h3>
                    <p>Avec le pack gratuit vous avez la possibilitée de créer 05 formulaires et partager le lien</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1" data-bs-whatever="tranxactcom@gmail.com">Souscrire</button>
                </div>
            </li>
            <li>
                <div class="pt-content">
                    <span><i class="icon-rocket icons"></i></span>
                    <h3>Pack Premium</h3>
                    <p>Better deliverability and improved click-through are just the start. Rich link-level data allows you to understand who is clicking your links, as well as when and where, so you can make smarter .</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Souscrire</button>
                </div>
            </li>
            <li>
                <div class="pt-content">
                    <span><i class="icon-speedometer icons"></i></span>
                    <h3>Pack Argent</h3>
                    <p>On top of being able to fully customize your links, auto-branding boosts awareness of your brand by giving you credit for your content and more insight into how it’s being consumed.</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Souscrire</button>
                </div>
            </li>
            <li>
                <div class="pt-content">
                    <span><i class="icon-pie-chart icons"></i></span>
                    <h3>Pack Gold</h3>
                    <p>Lorem ipsum dolor sit amet adicing elit maecenas sa faubus mollis interdum, decisions around the content and communications you share, amet adicing elit maecenas sa faubus mollis.</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Souscrire</button>
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Souscription</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('email.send') }}" method="post">
            <label for="recipient_email">Recipient Email:</label>
            <input type="email" id="recipient_email" name="recipient_email" required><br>

            <label for="recipient_name">Recipient Name:</label>
            <input type="text" id="recipient_name" name="recipient_name" required><br>

            <label for="sender_email">Sender Email:</label>
            <input type="email" id="sender_email" name="sender_email" required><br>

            <label for="sender_name">Sender Name:</label>
            <input type="text" id="sender_name" name="sender_name" required><br>

            <label for="message_content">Message Content:</label><br>
            <textarea id="message_content" name="message_content" required></textarea><br>

            <input type="submit" value="Send Email">
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Souscription</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Recipient:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button>
        </div>
      </div>
    </div>
</div>
<div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Souscription</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Recipient:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button>
        </div>
      </div>
    </div>
</div>
<div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Souscription</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Recipient:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button>
        </div>
      </div>
    </div>
</div>

