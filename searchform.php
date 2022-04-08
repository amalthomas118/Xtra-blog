<div class="row tm-row">
                <div class="col-12">

<form action="<?php echo home_url('/'); ?>"  method="get" class="form-inline tm-mb-80 tm-search-form">
                        <input class="form-control tm-search-input" name="s" id="search" type="text" 
                        placeholder="Search..." aria-label="Search" 
                        value="<?php the_search_query()?>"required>

                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>
                    </form>
                    </div>
            </div>