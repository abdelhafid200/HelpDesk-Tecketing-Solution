<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('permissions')->insert([
            // Tickets
            [ 'code' => 'CREATE_TICKET' ],
            [ 'code' => 'RESPONDE_TO_TICKET' ],
            [ 'code' => 'ADD_NOTE' ],
            [ 'code' => 'EDIT_NOTES_FOR_EVERYONE' ],
            [ 'code' => 'DELETE_TICKET' ],
            [ 'code' => 'EDIT_TICKET_STATUS' ],
            [ 'code' => 'EDIT_TICKET_RESOLUTION_TIME' ],
            [ 'code' => 'ASSIGN_TICKET_TO_GROUP' ],
            [ 'code' => 'ASSIGN_TICKET_TO_AGENT' ],
            [ 'code' => 'MARK_TICKET_AS_SPAM' ],
            [ 'code' => 'ARCHIVE_TICKET' ],
            // Equipe de travail
            [ 'code' => 'VIEW_AGENTS' ],
            [ 'code' => 'CREATE_AND_MODIFY_GROUP' ],
            [ 'code' => 'DELETE_GROUP' ],
            [ 'code' => 'ADD_GROUP_MEMBER' ],
            [ 'code' => 'DELETE_GROUP_MEMBER' ],
            [ 'code' => 'APPOINT_TEAM_LEADER' ],
            [ 'code' => 'CREATE_AND_MODIFY_AGENT' ],
            [ 'code' => 'MODIFY_SELF_AGENT_CALENDAR' ],
            [ 'code' => 'DELETE_AGENT' ],
            [ 'code' => 'CREATE_AND_MODIFY_ROLE' ],
            [ 'code' => 'DELETE_ROLE' ],
            // Centre d'assistance
            [ 'code' => 'CREATE_AND_MODIFY_ARTICLE' ],
            [ 'code' => 'PUBLISH_ARTICLE' ],
            [ 'code' => 'VIEW_ARTICLE_FEEDBACK' ],
            [ 'code' => 'CREATE_AND_MODIFY_SECTION_AND_CATEGORY' ],
            [ 'code' => 'DELETE_SECTION_AND_CATEGORY' ],
            // Horaire de travail
            [ 'code' => 'VIEW_CALENDARS' ],
            [ 'code' => 'CREATE_AND_MODIFY_CALENDAR' ],
            [ 'code' => 'DELETE_CALENDAR' ],
            [ 'code' => 'CHANGE_DEFAULT_CALENDAR' ],
            // Clients
            [ 'code' => 'VIEW_CLIENTS' ],
            [ 'code' => 'ADD_AND_MODIFY_CLIENT' ],
            [ 'code' => 'DELETE_CLIENT' ],
            [ 'code' => 'BLOCK_CLIENT' ],
            [ 'code' => 'CONVERT_CLIENT_TO_AGENT' ],
            [ 'code' => 'CHANGE_CLIENT_PASSWORD' ],
            [ 'code' => 'SEND_CLIENT_CONFIRMATION_MAIL' ]
        ]);
        
    }
}
