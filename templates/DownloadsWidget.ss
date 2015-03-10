<% if $Files %>
<div class="panel panel-default side-bar-title">
    <div class="panel-heading">
        <h3 class="panel-title">$Title</h3>
    </div>
</div>
<ul class="nav nav-pills nav-stacked">
    <% loop  $Files %>
    <li role="presentation">
        <a href="$File.URL"  title="Download $Title.XML page">
            <span class="text">$Title.XML</span>
        </a>
    </li>
    <% end_loop %>
</ul>
<% end_if %>
