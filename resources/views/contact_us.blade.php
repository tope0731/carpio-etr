@extends('layout')
@section('content')
<style>
    body{
    background:#eee;    
}
.main-box.no-header {
    padding-top: 20px;
}
.main-box {
    background: #FFFFFF;
    -webkit-box-shadow: 1px 1px 2px 0 #CCCCCC;
    -moz-box-shadow: 1px 1px 2px 0 #CCCCCC;
    -o-box-shadow: 1px 1px 2px 0 #CCCCCC;
    -ms-box-shadow: 1px 1px 2px 0 #CCCCCC;
    box-shadow: 1px 1px 2px 0 #CCCCCC;
    margin-bottom: 16px;
    -webikt-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}
.table a.table-link.danger {
    color: #e74c3c;
}
.label {
    border-radius: 3px;
    font-size: 0.875em;
    font-weight: 600;
}
.user-list tbody td .user-subhead {
    font-size: 0.875em;
    font-style: italic;
}
.user-list tbody td .user-link {
    display: block;
    font-size: 1.25em;
    padding-top: 3px;
    margin-left: 60px;
}
a {
    color: #3498db;
    outline: none!important;
}
.user-list tbody td>img {
    position: relative;
    max-width: 50px;
    float: left;
    margin-right: 15px;
}

.table thead tr th {
    text-transform: uppercase;
    font-size: 0.875em;
}
.table thead tr th {
    border-bottom: 2px solid #e7ebee;
}
.table tbody tr td:first-child {
    font-size: 1.125em;
    font-weight: 300;
}
.table tbody tr td {
    font-size: 0.875em;
    vertical-align: middle;
    border-top: 1px solid #e7ebee;
    padding: 12px 8px;
}
a:hover{
text-decoration:none;
}
</style>
<div class="container bootstrap snippets bootdey">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-box no-header clearfix">
                <div class="main-box-body clearfix">
                    <div class="table-responsive">
                        <table class="table user-list">
                            <thead>
                                <tr>
                                <th><span>Campus</span></th>
                                <th><span>Fb URL</span></th>
                                <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Alaminos Campus</td>
                                    <td>
                                        <a href="https://www.facebook.com/PSUGuidanceAlaminos">	https://www.facebook.com/PSUGuidanceAlaminos</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Asingan Campus</td>
                                    <td>
                                        <a href="https://www.facebook.com/psuasinganguidanceservices">https://www.facebook.com/psuasinganguidanceservices</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bayambang</td>
                                    <td>
                                        <a href="https://www.facebook.com/PsuBayambangCampusAdmissionAndGuidance">https://www.facebook.com/PsuBayambangCampusAdmissionAndGuidance</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Binmaley</td>
                                    <td>
                                        <a href="https://www.facebook.com/psubinmaleyofficial">https://www.facebook.com/psubinmaleyofficial</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Infanta</td>
                                    <td>
                                        <a href="https://www.facebook.com/psuinfantaAGTO">	https://www.facebook.com/psuinfantaAGTO</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lingayen	</td>
                                    <td>
                                        <a href="https://www.facebook.com/psuguidanceservices">	https://www.facebook.com/psuguidanceservices</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>San Carlos City</td>
                                    <td>
                                        <a href="https://www.facebook.com/psuscguidanceoffice">	https://www.facebook.com/psuscguidanceoffice</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sta. Maria</td>
                                    <td>
                                        <a href="https://www.facebook.com/PSUSMGuidanceOffice">https://www.facebook.com/PSUSMGuidanceOffice</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Urdaneta City</td>
                                    <td>
                                        <a href="https://www.facebook.com/PSUUrdanetaGCO">https://www.facebook.com/PSUUrdanetaGCO</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection