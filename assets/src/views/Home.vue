<template>
  <div class="kohkane__page--home">
    <div class="kohkane__page--home__left">
      <div class="kohkane__page--home__snapshots">
        <header class="kohkane__page--home__snapshots__header">
          <h2 class="kohkane__page--home__snapshots__headerTitle">Snapshots</h2>

          <div>
            <button type="button" class="butn">Create Snapshot</button>
          </div>
        </header>

        <ul class="kohkane__page--home__snapshots__list">
          <li
            v-for="(s, i) in snapshots"
            :key="'snapshot_'+i"
            class="kohkane__page--home__snapshots__listItem"
          >
            <div class="kohkane__page--home__snapshots__listItemDetails">
              <div class="kohkane__page--home__snapshots__listItemDetails__title">{{ s.title }}</div>
              <ul class="kohkane__page--home__snapshots__listItemDetails__meta">
                <li>
                  <strong>Created:</strong>
                  {{ s.dateCreated }}
                </li>
                <li>
                  <strong>Creator:</strong>
                  {{ s.createdBy }}
                </li>
              </ul>
            </div>
            <div class="kohkane__page--home__snapshots__listItemStats">
              <ul class="kohkane__page--home__snapshots__listItemStats__list">
                <li
                  v-for="(stat, i) in s.stats"
                  :key="'stat_'+i"
                  class="kohkane__page--home__snapshots__listItemStats__listItem"
                >
                  <em>{{ stat.value }}</em>
                  <strong>{{ stat.label }}</strong>
                </li>
              </ul>
            </div>
            <div class="kohkane__page--home__snapshots__listItemActions">
              <ul>
                <li>
                  <button type="button" class="butn butn--sm butn--rounded butn--gray">Restore</button>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="kohkane__page--home__sidebar">
      <section class="kohkane__page--home__sidebarUsage">
        <ProgressRing :radius="40" :progress="snapshotsUsed" :stroke="10"/>
        <em>
          You've used
          <strong>{{ snapshotsUsed }}%</strong>
          <br>of your
          <strong>1GB</strong>.
          <br>
          <a href="#" class="small-upper-text">Go PRO for unlimited!</a>
        </em>
      </section>
      <section>
        <h4 class="small-upper-text">What are Snapshots?</h4>
        <p>Snapshots are encapsulated collections of your entire WordPress site at any given time. Snapshots can be created automatically for backup purposes or manually.</p>

        <h4 class="small-upper-text">Kohkane is even better with friends!</h4>
        <p>The beauty of Kohkane is the power it brings to teams. Easily share snapshots between team members to stay in sync. Never step on each others toes again!</p>

        <p>
          <a href="#" class="butn butn--secondary">Go Pro!</a>
        </p>
      </section>
    </div>
  </div>
</template>

<script>
// @ is an alias to /src
import ProgressRing from "@/components/ProgressRing/ProgressRing";
export default {
  name: "home",
  data() {
    return {
      snapshotsUsed: 75,
      snapshots: [
        {
          title: "Sun. February 25th, 2019",
          dateCreated: "02/25/2019",
          createdBy: "Evan Agee",
          stats: [
            {
              label: "Posts",
              value: 323
            },
            {
              label: "Pages",
              value: 21
            },
            {
              label: "Plugins",
              value: 21
            }
          ]
        },
        {
          title: "Fri. February 23th, 2019",
          dateCreated: "02/23/2019",
          createdBy: "Jordan Skomer",
          stats: [
            {
              label: "Posts",
              value: 1234
            },
            {
              label: "Pages",
              value: 98
            },
            {
              label: "Plugins",
              value: 21
            }
          ]
        },
        {
          title: "Wed. February 21th, 2019",
          dateCreated: "02/21/2019",
          createdBy: "Brian Caicco",
          stats: [
            {
              label: "Posts",
              value: 3
            },
            {
              label: "Pages",
              value: 43
            },
            {
              label: "Plugins",
              value: 21
            }
          ]
        },
        {
          title: "Pre-Plugin Update Snapshot",
          dateCreated: "02/20/2019",
          createdBy: "Evan Agee",
          stats: [
            {
              label: "Posts",
              value: 6903
            },
            {
              label: "Pages",
              value: 4
            },
            {
              label: "Plugins",
              value: 21
            }
          ]
        },
        {
          title: "Initial Snapshot",
          dateCreated: "02/19/2019",
          createdBy: "Evan Agee",
          stats: [
            {
              label: "Posts",
              value: 323
            },
            {
              label: "Pages",
              value: 21
            },
            {
              label: "Plugins",
              value: 21
            }
          ]
        },
        {
          title: "Sun. February 25th, 2019",
          dateCreated: "02/25/2019",
          createdBy: "Evan Agee",
          stats: [
            {
              label: "Posts",
              value: 323
            },
            {
              label: "Pages",
              value: 21
            },
            {
              label: "Plugins",
              value: 21
            }
          ]
        },
        {
          title: "Fri. February 23th, 2019",
          dateCreated: "02/23/2019",
          createdBy: "Jordan Skomer",
          stats: [
            {
              label: "Posts",
              value: 323
            },
            {
              label: "Pages",
              value: 21
            },
            {
              label: "Plugins",
              value: 21
            }
          ]
        },
        {
          title: "Wed. February 21th, 2019",
          dateCreated: "02/21/2019",
          createdBy: "Brian Caicco",
          stats: [
            {
              label: "Posts",
              value: 323
            },
            {
              label: "Pages",
              value: 21
            },
            {
              label: "Plugins",
              value: 21
            }
          ]
        },
        {
          title: "Pre-Plugin Update Snapshot",
          dateCreated: "02/20/2019",
          createdBy: "Evan Agee",
          stats: [
            {
              label: "Posts",
              value: 323
            },
            {
              label: "Pages",
              value: 21
            },
            {
              label: "Plugins",
              value: 21
            }
          ]
        },
        {
          title: "Initial Snapshot",
          dateCreated: "02/19/2019",
          createdBy: "Evan Agee",
          stats: [
            {
              label: "Posts",
              value: 323
            },
            {
              label: "Pages",
              value: 21
            },
            {
              label: "Plugins",
              value: 21
            }
          ]
        }
      ]
    };
  },

  mounted() {},

  components: {
    ProgressRing
  }
};
</script>

<style scoped>
.kohkane__page--home {
  display: flex;
  align-items: stretch;

  &__left {
    flex: 1;
  }

  &__sidebar {
    width: calc(300px);
    border-left: 1px solid var(--brandPrimary);
    background: rgba(#399bf9, 0.05);

    & > * {
      padding: 2rem;
    }

    &Usage {
      display: flex;
      align-items: center;
      border-bottom: 1px solid var(--brandPrimary);
      padding: 0.5rem 1rem;
      background: #ecf9ca;
      font-family: var(--fontFamilyHeading);
      font-weight: var(--fontWeightLight);

      em {
        font-size: 0.9rem;

        strong {
          font-weight: var(--fontWeightBold);
        }

        a {
          text-decoration: none;
          color: var(--brandPrimary);
          font-style: normal;
        }
      }
    }
  }

  &__snapshots {
    padding: 2rem;

    &__header {
      display: flex;
      align-items: center;

      &Title {
        flex: 1;
      }
    }

    &__list {
      max-height: calc(84px * 6.25);
      overflow: auto;
      border: 1px solid var(--mediumGray);
      background: var(--lighterGray);

      &Item {
        border-bottom: 1px solid var(--mediumGray);
        padding: 0.75rem;
        margin: 0;
        display: flex;
        align-items: stretch;

        &:last-child {
          border-bottom: 0;
        }

        &:hover {
          background: white;
        }

        &Details {
          width: 50%;
          flex: 1;

          &__title {
            font-weight: var(--fontWeightBold);
            font-size: 1.5rem;
            margin-bottom: 5px;
          }

          &__meta {
            font-family: var(--fontFamilyHeading);
            display: flex;
            margin: 0;
            padding: 0;
            list-style: none;
            font-size: 0.7rem;

            li {
              margin-right: 1rem;

              &:last-child {
                margin-right: 0;
              }

              strong {
                text-transform: uppercase;
              }
            }
          }
        }

        &Stats {
          display: flex;
          align-items: stretch;
          flex: 1;

          &__list {
            display: flex;
            align-items: stretch;
            margin: 0;
            padding: 0;
            list-style: none;

            &Item {
              display: flex;
              flex-direction: column;
              justify-content: flex-end;
              align-items: center;
              line-height: 1;
              border-radius: 3px;
              /* background: white; */
              border: 1px solid var(--mediumGray);
              margin: 0;
              padding: 0;
              margin-right: 1rem;
              font-size: 1.5rem;
              overflow: hidden;
              min-width: 70px;

              &:last-child {
                margin-right: 0;
              }

              em {
                flex: 1;
                display: flex;
                flex-direction: column;
                align-content: center;
                justify-content: center;
                padding: 0 5px;
                text-align: center;
              }

              strong {
                width: calc(100% - 10px);
                font-family: var(--fontFamilyHeading);
                background: var(--mediumGray);
                color: var(--gray);
                text-transform: uppercase;
                font-size: 0.6rem;
                padding: 5px;
                text-align: center;
              }
            }
          }
        }

        &Actions {
          display: flex;
          justify-content: flex-end;
          align-items: center;
        }
      }
    }
  }
}
</style>
