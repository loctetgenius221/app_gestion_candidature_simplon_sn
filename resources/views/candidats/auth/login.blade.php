<form method="POST" action="{{ route('candidat-login') }}" class="form-group">
                    @csrf
                    <div class="mb-3 text-start">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3 text-start">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <!-- Bouton de connexion -->
                    <div class="d-flex justify-content-between mt-5">
                        <button type="submit" class="btn btn-primary me-2">Se connecter</button>
                        <a href="/" class="btn btn-danger mt-3">Retourner</a>
                        <a href="register" class="btn btn-outline-secondary bouton"> Pas des comptes, créer un</a>
                    </div><br>
                
                </form>