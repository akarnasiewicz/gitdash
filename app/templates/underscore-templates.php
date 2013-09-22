<script type="text/template" id="footer">
    <div class="inner">
        <ul class="pages">
            <li class="home active" title="Home"><div class="icon icon-home"></div></li>
            <li class="settings" title="Settings"><div class="icon icon-cogs"></div></li>
            <div class="loading-status">
                <img style="width:100%" src="http://www.chimply.com/coconut/images/516706">
            </div>
        </ul>
        <div class="meta-data">
            Have a suggestion? <a target="_blank" href="https://github.com/ceslami/gitdash/issues/new?labels=enhancement">Make a feature request</a> or <a href="https://github.com/ceslami/gitdash/">open a pull request</a>. &nbsp;&middot;&nbsp; GitDash, Cyrus Eslami &nbsp;&middot;&nbsp; 2013
        </div>
    </div>
</script>

<script type="text/template" id="home">
    <div class='experiments'></div>
    <div class="overview" id="overview"></div>
</script>

<script type="text/template" id="pull-request">
    <% if(showRepoName) { %>
        <tr class="header">
            <td></td>
            <td><%= head.repo.name %></td>
        </tr>
    <% } %>
    <tr data-href='<%= html_url %>'>
        <td class="image" valign='top'>
            <div class="image-wrap">
                <div class="circle">
                    <img title="<%= user.login %>" src="<%= user.avatar_url %>">
                </div>
            </div>
        </td>
        <td class="meta" valign='top'>
            <div>
                <span class="title"><%= title %></span>
                <%= is_new_badge() %>
                <%= has_approval_badge() %>
                <%= is_off_master_badge() %>
            </div>
            <div class="stats">
                <%= commits %> commits &nbsp;&middot;&nbsp; <%= changed_files %> files &nbsp;&middot;&nbsp; <%= comments %> Comments
            </div>
        </td>
        <td class="age" valign='top'><%= days_ago() %></td>
    </tr>
</script>
<script type="text/template" id="home-heads-up">
    <div class="row">
        <div class="col-2">
            <div class="title" title="Percentage of pull requests that are less than 4 days old">Freshness Score</div>
            <div class="chart"></div>
        </div>
        <div class="col-2">
            <div class="title" title="Percentage of pull requests that are less than 4 days old">Your Open PR&#39;s</div>
            <div class="number user-pull-requests"></div>
        </div>
        <div style="clear:both"></div>
    </div>
    <div class="row">
        <div class="col-2">
            <div class="title" title="Number of pull requests which contain your 'looks good' comments">Ready To Merge <span style="vertical-align:2px" class="badge blue white-text">SHIP IT</span></div>
            <div class="number ready-to-merge"></div>
        </div>
        <div class="col-2">
            <div class="title" title="Number of pull requests without any comments">Uncommented PR&#39;s <span style="vertical-align:2px" class="badge green white-text">NEW</span></div>
            <div class="number uncommented"></div>
        </div>
        <div style="clear:both"></div>
    </div>
</script>
<script type="text/template" id="home-pull-requests">
    <div class="heading">
        <div class="title">Open Pull Requests</div>
    </div>
    <table id="experiments"></table>
</script>
<script type="text/template" id="settings">
    <div id="settings">
        <div class="header">Settings</div>
        <form class="settings">
            <fieldset>
                <label>
                    <div class="title">Approval Words:</div>
                    <div class="description">
                        You can specify the words or phrases that your
                        team uses in comments to mark a pull request as
                        ready to merge. This field is case-sensitive, and you
                        can separate terms with a comma.
                    </div>
                </label>
                <input type="text" class="approval-words" value="<%= approval_words %>">
                <div style="clear:both"></div>
            </fieldset>
            <fieldset>
                <label>
                    <div class="title">Freshness Score Threshold:</div>
                    <div class="description">
                        The calculation of the Freshness Score depends on
                        how old pull requests are. By default, we designate
                        3 day old pull requests as stale. Depending on your
                        code review process, you may want to adjust this.
                    </div>
                </label>
                <input type="number" min="1" max="10" class="freshness-threshold" value="<%= freshness_threshold %>"> <span class="days">days</span>
            </fieldset>
        </form>
        <button class="save">Save Settings</button>
        <div class="saved-successfully">
            <span class="icon-ok"></span> Saved successfully.
        </div>
    </div>
</script>