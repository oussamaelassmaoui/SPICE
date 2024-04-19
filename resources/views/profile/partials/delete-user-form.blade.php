<div class="col-xl-9 col-lg-8 wow fadeInRight">
    <div class="dashboard_content">
        <h2 class="dashboard_title">Supprimer le compte</h2>

        <form method="post" action="{{ route('profile.destroy') }}" class="dashboard_change_password">
            @csrf
            @method('delete')


            <div class="row">
                <div class="border-bottom pb-3 mb-3">

                    <p class="fs-15">Une fois votre compte supprimé, toutes ses ressources et données seront
                        définitivement supprimées. Veuillez saisir votre mot de passe pour confirmer que vous souhaitez
                        supprimer définitivement votre compte.</p>
                </div>
                <div class="col-xl-12">
                    <input type="password" id="password" name="password" placeholder="Password">
                    <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                    <button type="submit" class="common_btn">Submit <span></span></button>
                </div>
            </div>
        </form>
    </div>
</div>

