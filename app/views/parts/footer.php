        <!-- Footer -->
        <footer class="text-center">
            <div class="footer-above">
                <div class="container">
                    <div class="row">
                        <div class="footer-col col-sm-4">
                            <h3>Contact Us!</h3>
                            <address>{{ address|raw }}</address>
                              <span><i class="fa fa-fw fa-phone"></i></span>{{phone|raw }}<br>
                              <span><i class="fa fa-fw fa-envelope"></i></span> {{ email|raw }}
                        </div>
                        <div class="footer-col col-sm-4">
                            <h3>Around the Web</h3>
                            <ul class="list-inline">
                                <li>
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-4x fa-facebook wow tada"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-4x fa-twitter wow tada"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-4x fa-whatsapp wow tada"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-col col-sm-4" >
                            <h3>Site Links</h3>
                            <ul style="list-style-type: none;">
                                <li><a href="/">Home</a></li>
                                <li><a href="/about">About</a></li>
                                <li><a href="/ministries">ministries</a></li>
                                <li><a href="/contact">Contact</a></li>
                                <li><a href="/admin">Admin</a></li>
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-dark">
                <div class="footer-below">
                    <div class="container">
                        <div class="col-sm-6">
                            Copyright &copy; {{ brand }}  <script type="text/javascript">document.write(new Date().getFullYear());</script>
                        </div>
                        <div class="col-sm-6">
                            Website design by talented web developer<br> <a href="http://www.tawazz.net/me">Tawanda Nyakudjga</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
