<form action="/TestSite" method="get">
    <label for="search">Search</label>
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" required />
    <br></br>
    <button type="submit" class="btn btn-outline-secondary btn-sm">Search</button>
</form>