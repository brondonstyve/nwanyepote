<div class="row">
                @if (session()->has('message'))
                  <div class="alert alert-info text-center alert-dismissible">
                      {{ session('message') }}
                  </div>
                @endif

                @if (session()->has('error'))
                    <div class="alert alert-danger text-center upper alert-dismissible">
                        {{ session('error') }}
                    </div>
                @endif
                <form class="contact-form needs-validation" >
                    <div class="messages"></div>
                    <div class="row gx-4">
                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input type="text" name="name" class="form-control" wire:model="name" placeholder="brondon" required>
                                <label for="form_name">Nom *</label>
                                @error('name') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input type="text" name="last_name" class="form-control" wire:model="last_name" placeholder="styve" required>
                                <label for="form_lastname">Prénom *</label>
                                @error('last_name') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input type="email" name="email" class="form-control" wire:model="email" placeholder="brondonstyve@gmail.com" required>
                                <label for="form_email">Adresse email *</label>
                                @error('email') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input type="text" name="phone" class="form-control" wire:model="phone" placeholder="698547458" required>
                                <label for="form_email">Numéro de téléphone *</label>
                                @error('phone') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-12">
                            <div class="form-floating mb-4">
                                <textarea name="message" class="form-control" wire:model="message" placeholder="Your message" style="height: 150px" required></textarea>
                                <label for="form_message">Message *</label>
                                @error('message') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-12 text-center">
                            <button  wire:click.prevent="store()" class="btn btn-primary rounded-pill btn-send mb-3">Envoyer votre message </button>
                            <p class="text-muted"><strong>*</strong> ces champs sont obligatoires.</p>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </form>
                <!-- /form -->
            </div>
            <!-- /column -->
        </div>
