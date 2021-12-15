// typescript example
import { defineComponent } from "vue";
import { Meeting, VueDyteClient } from "vue-dyte";

export default defineComponent({
  components: {
    VueDyteClient,
  },
  data() {
    return {
      clientId: '<your Dyte organization id>',
      meetingConfig: {
        roomName: '<room name>',
        authToken: '<the participant authToken>',
        // for more options, see here: https://docs.dyte.io/javascript/reference/meeting
      }
    }
  }
  methods: {
    onInit(meeting: Meeting) {
      console.log("onInit", meeting);
    },
    onError(e: any) {
      console.error(e);
    },
    onConnect() {
      console.log("connected");
    },
    onDisconnect() {
      console.log("disconnected");
    },
  },
});
