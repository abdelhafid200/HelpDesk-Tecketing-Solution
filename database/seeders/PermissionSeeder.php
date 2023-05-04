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
            [ 'code' => 'CREATE_TICKET', 'category' => 0 ],
            [ 'code' => 'RESPONDE_TO_TICKET', 'category' => 0 ],
            [ 'code' => 'ADD_NOTE', 'category' => 0 ],
            [ 'code' => 'EDIT_NOTES_FOR_EVERYONE', 'category' => 0 ],
            [ 'code' => 'DELETE_TICKET', 'category' => 0 ],
            [ 'code' => 'EDIT_TICKET_STATUS', 'category' => 0 ],
            [ 'code' => 'EDIT_TICKET_RESOLUTION_TIME', 'category' => 0 ],
            [ 'code' => 'ASSIGN_TICKET_TO_GROUP', 'category' => 0 ],
            [ 'code' => 'ASSIGN_TICKET_TO_AGENT', 'category' => 0 ],
            [ 'code' => 'MARK_TICKET_AS_SPAM', 'category' => 0 ],
            [ 'code' => 'ARCHIVE_TICKET', 'category' => 0 ],
            // Equipe de travail
            [ 'code' => 'VIEW_AGENTS', 'category' => 1 ],
            [ 'code' => 'CREATE_AND_MODIFY_GROUP', 'category' => 1 ],
            [ 'code' => 'DELETE_GROUP', 'category' => 1 ],
            [ 'code' => 'ADD_GROUP_MEMBER', 'category' => 1 ],
            [ 'code' => 'DELETE_GROUP_MEMBER', 'category' => 1 ],
            [ 'code' => 'APPOINT_TEAM_LEADER', 'category' => 1 ],
            [ 'code' => 'CREATE_AND_MODIFY_AGENT', 'category' => 1 ],
            [ 'code' => 'MODIFY_SELF_AGENT_CALENDAR', 'category' => 1 ],
            [ 'code' => 'DELETE_AGENT', 'category' => 1 ],
            [ 'code' => 'CREATE_AND_MODIFY_ROLE', 'category' => 1 ],
            [ 'code' => 'DELETE_ROLE', 'category' => 1 ],
            // Centre d'assistance
            [ 'code' => 'CREATE_AND_MODIFY_ARTICLE', 'category' => 2 ],
            [ 'code' => 'PUBLISH_ARTICLE', 'category' => 2 ],
            [ 'code' => 'VIEW_ARTICLE_FEEDBACK', 'category' => 2 ],
            [ 'code' => 'CREATE_AND_MODIFY_SECTION_AND_CATEGORY', 'category' => 2 ],
            [ 'code' => 'DELETE_SECTION_AND_CATEGORY', 'category' => 2 ],
            // Horaire de travail
            [ 'code' => 'VIEW_CALENDARS', 'category' => 3 ],
            [ 'code' => 'CREATE_AND_MODIFY_CALENDAR', 'category' => 3 ],
            [ 'code' => 'DELETE_CALENDAR', 'category' => 3 ],
            [ 'code' => 'CHANGE_DEFAULT_CALENDAR', 'category' => 3 ],
            // Clients
            [ 'code' => 'VIEW_CLIENTS', 'category' => 4 ],
            [ 'code' => 'ADD_AND_MODIFY_CLIENT', 'category' => 4 ],
            [ 'code' => 'DELETE_CLIENT', 'category' => 4 ],
            [ 'code' => 'BLOCK_CLIENT', 'category' => 4 ],
            [ 'code' => 'CONVERT_CLIENT_TO_AGENT', 'category' => 4 ],
            [ 'code' => 'CHANGE_CLIENT_PASSWORD', 'category' => 4 ],
            [ 'code' => 'SEND_CLIENT_CONFIRMATION_MAIL', 'category' => 4 ]
        ]);
        
    }
}
